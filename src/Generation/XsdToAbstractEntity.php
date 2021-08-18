<?php

namespace SoftwarePunt\PSAPI\Generation;

/**
 * Utility for creating or updating AbstractEntity classes from the PS-API XSD definition.
 */
class XsdToAbstractEntity
{
    private \SimpleXMLElement $xsd;

    public function __construct(string $xsdPath)
    {
        $this->loadXsd($xsdPath);
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Setup

    private function loadXsd(string $xsdPath): void
    {
        $xsdRaw = @file_get_contents($xsdPath);
        if (!$xsdRaw)
            throw new \RuntimeException("Could not read XSD file: {$xsdPath}");

        // xs: prefixes cause SimpleXML to choke, remove them before parse
        $xsdRaw = str_replace("xs:", "", $xsdRaw);

        $xsdParsed = simplexml_load_string($xsdRaw);
        if (!$xsdParsed)
            throw new \RuntimeException("Could not parse XSD file");

        $this->xsd = $xsdParsed;
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Main loop

    public function processAll(string $targetDirectory): void
    {
        foreach ($this->xsd->children() as $entry) {
            if ($entry->getName() === "complexType") {
                $this->processOne($targetDirectory, $entry);
            }
        }
    }

    public function processOne(string $targetDirectory, \SimpleXMLElement $xsd): bool
    {
        $entityName = (string)$xsd->attributes()['name'];

        if (empty($entityName) || in_array($entityName, self::$typeBlackList)) {
            return false;
        }

        $entityName = $this->normalizeTypeName($entityName);

        $buffer = "";
        $this->writeHeader($buffer, $entityName);

        $anyEntries = false;

        foreach ($xsd->children() as $child) {
            foreach ($child as $element) {
                if ($this->writeElement($buffer, $element)) {
                    $anyEntries = true;
                }
            }
        }

        if (!$anyEntries) {
            return false;
        }

        $this->writeFooter($buffer);

        $targetPath = $targetDirectory . "/{$entityName}.php";

        if ($this->checkForChanges($buffer, $targetPath)) {
            // Change detected, write file
            return file_put_contents($targetPath, $buffer) > 0;
        } else {
            // No meaningful change detected
            return true;
        }
    }

    /**
     * Evaluates whether fundamental changes can be detected between the new buffer and an existing file.
     *
     * @param string $newBuffer The new buffer, about to be written to $targetPath.
     * @param string $targetPath The path to the new, possibly already existing, file.
     * @return bool TRUE if changes or issues are detected and the file should be (re)written.
     */
    private function checkForChanges(string $newBuffer, string $targetPath): bool
    {
        if (!file_exists($targetPath))
            // File does not exist yet
            return true;

        $oldBuffer = @file_get_contents($targetPath);
        $oldBuffer = str_replace("\r\n", PHP_EOL, $oldBuffer); // normalize line endings

        if (!$oldBuffer)
            // Existing file does not appear valid
            return true;

        $newBufferStartIdx = strpos($newBuffer, 'class ');
        $oldBufferStartIdx = strpos($oldBuffer, 'class ');

        if ($newBufferStartIdx === false || $oldBufferStartIdx === false)
            // One or both buffers do not have a valid class declaration?
            return true;

        return strcmp(substr($newBuffer, $newBufferStartIdx), substr($oldBuffer, $oldBufferStartIdx));
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Buffer writer

    private function writeLine(string &$buffer, string $line = ""): void
    {
        $buffer .= $line . PHP_EOL;
    }

    private function writeHeader(string &$buffer, string $entityName): void
    {
        $now = new \DateTime('now');

        $this->writeLine($buffer, "<?php");
        $this->writeLine($buffer);
        $this->writeLine($buffer, "namespace SoftwarePunt\PSAPI\Models\Entities;");
        $this->writeLine($buffer);
        $this->writeLine($buffer, "use SoftwarePunt\PSAPI\Models\AbstractEntity;");
        $this->writeLine($buffer);
        $this->writeLine($buffer, "/**");
        $this->writeLine($buffer, " * {$entityName} PS-API type ");
        $this->writeLine($buffer, " * @generated {$now->format('Y-m-d')}");
        $this->writeLine($buffer, " **/");
        $this->writeLine($buffer, "class {$entityName} extends AbstractEntity");
        $this->writeLine($buffer, "{");
    }

    private function writeElement(string &$buffer, \SimpleXMLElement $element): bool
    {
        // -------------------------------------------------------------------------------------------------------------
        // Init data

        $attrs = $element->attributes();

        $name = (string)$attrs['name'];
        $type = (string)$attrs['type'];
        $minOccurs = (int)($attrs['minOccurs'] ?? 1);
        $maxOccurs = (int)($attrs['maxOccurs'] ?? 1);

        if (empty($name) || empty($type)) {
            return false;
        }

        $phpDocText = null;
        $phpDocVarType = null;

        $isArray = $maxOccurs > 1 || $attrs['maxOccurs'] == "unbounded";
        $isNullable = $minOccurs === 0;

        // -------------------------------------------------------------------------------------------------------------
        // Determine php type

        if ($type === "string" || str_starts_with($type, "translationtype_")
            || str_starts_with($type, "string_")) {
            $phpTypeText = "string";
        } else if ($type === "boolean") {
            $phpTypeText = "bool";
        } else if ($type === "int") {
            $phpTypeText = "int";
        } else if ($type === "float") {
            $phpTypeText = "float";
        } else if ($type === "dateTime" || $type === "date") {
            $phpTypeText = "\DateTime";
        } else {
            $phpTypeText = $this->normalizeTypeName($type);
        }

        if ($isArray) {
            $phpDocVarType = "{$phpTypeText}[]";
            $phpTypeText = "array";
            $isNullable = false;
        }

        if ($isNullable) {
            $phpTypeText = "?{$phpTypeText}";
        }

        // -------------------------------------------------------------------------------------------------------------
        // Read annotations

        foreach ($element->children() as $child) {
            foreach ($child as $subChild) {
                if ($subChild->getName() === "documentation") {
                    $docValue = (string)$subChild;
                    if (str_ends_with($docValue, ":todo")
                        || str_ends_with(strtolower($docValue), ":n.a.")) {
                        // missing doc or not applicable
                        continue;
                    }
                    if ($phpDocText === null) {
                        $phpDocText = "";
                    } else {
                        $phpDocText .= PHP_EOL;
                    }
                    $docValueParts = explode(':', $docValue, 2);
                    $phpDocText .= trim($docValueParts[1]);
                }
            }
        }

        // -------------------------------------------------------------------------------------------------------------
        // Build declaration

        $declaration = "public {$phpTypeText} \${$name}";

        if ($isNullable) {
            $declaration .= " = null";
        }

        if ($phpDocText || $phpDocVarType) {
            $this->writePhpDoc($buffer, $phpDocText, $phpDocVarType, 1);
        }

        $this->writeLine($buffer, "\t{$declaration};");
        return true;
    }

    private function writePhpDoc(string &$buffer, ?string $text, ?string $varType, int $tabIndex = 1)
    {
        $tabs = str_repeat("\t", $tabIndex);

        $this->writeLine($buffer, "{$tabs}/**");

        if ($text) {
            $textLines = explode(PHP_EOL, $text);

            foreach ($textLines as $textLine) {
                $this->writeLine($buffer, "{$tabs} * {$textLine}");
            }
        }

        if ($varType) {
            if ($text) {
                $this->writeLine($buffer, "{$tabs} * ");
            }

            $this->writeLine($buffer, "{$tabs} * @var {$varType}");
        }

        $this->writeLine($buffer, "{$tabs} */");
    }

    private function writeFooter(string &$buffer): void
    {
        $this->writeLine($buffer, "}");
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Utils

    private function normalizeTypeName(string $name): string
    {
        $suffix = "type";
        if (str_ends_with($name, $suffix)) {
            $name = substr($name, 0, strlen($name) - strlen($suffix));
        }
        return ucfirst($name);
    }

    private static array $typeBlackList = [
        "translationtype_maxlength255", "translationtype_maxlength500", "translationtype_maxlength2000",
        "translationtype_maxlengthInfinite"
    ];
}
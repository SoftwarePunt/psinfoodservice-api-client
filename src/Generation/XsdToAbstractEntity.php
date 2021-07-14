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
        return file_put_contents($targetPath, $buffer) > 0;
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
        $attrs = $element->attributes();

        $name = (string)$attrs['name'];
        $type = (string)$attrs['type'];

        if (empty($name) || empty($type)) {
            return false;
        }

        $minOccurs = (int)($attrs['minOccurs'] ?? 0);
        $maxOccurs = (int)($attrs['maxOccurs'] ?? 1);

        $isArray = $maxOccurs > 1 || $attrs['maxOccurs'] == "unbounded";

        if ($type === "string" || str_starts_with($type, "translationtype_")
            || str_starts_with($type, "string_")) {
            $phpTypeText = "string";
        } else if ($type === "boolean") {
            $phpTypeText = "bool";
        } else if ($type === "int") {
            $phpTypeText = "int";
        } else if ($type === "float") {
            $phpTypeText = "float";
        } else if ($type === "dateTime") {
            $phpTypeText = "\DateTime";
        } else {
            $phpTypeText = $this->normalizeTypeName($type);
        }

        if ($isArray) {
            $this->writeLine($buffer, "\t/**");
            $this->writeLine($buffer, "\t * @type {$phpTypeText}[]");
            $this->writeLine($buffer, "\t */");

            $phpTypeText = "array";
        }

        $isNullable = ($minOccurs === 0 && $phpTypeText !== "array");

        if ($isNullable) {
            $phpTypeText = "?{$phpTypeText}";
        }

        $declaration = "public {$phpTypeText} \${$name}";

        if ($isNullable) {
            $declaration .= " = null";
        }

        $this->writeLine($buffer, "\t{$declaration};");
        return true;
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
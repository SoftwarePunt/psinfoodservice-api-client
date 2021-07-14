<?php

// ---------------------------------------------------------------------------------------------------------------------
// Bootstrap

use SoftwarePunt\PSAPI\Generation\XsdToAbstractEntity;

define('BaseDir', realpath(__DIR__ . "/../"));
const TargetDir = BaseDir . "/src/Models/Entities";

require_once BaseDir . "/vendor/autoload.php";

// ---------------------------------------------------------------------------------------------------------------------
// Input

$pathArg = $argv[1] ?? null;

if (!$pathArg) {
    echo "Usage: xsdgen.php [xsd_file_path] - missing file path!" . PHP_EOL;
    exit(2);
}

if (!is_readable($pathArg)) {
    echo "Fatal: could not read input file ({$pathArg})" . PHP_EOL;
    exit(1);
}

if (!is_dir(TargetDir) && !mkdir(TargetDir, recursive: true)) {
    echo "Fatal: target directory does not exist / could not be created" . PHP_EOL;
    exit(1);
}

// ---------------------------------------------------------------------------------------------------------------------
// Run

echo "Starting XSD -> AbstractEntity generation..." . PHP_EOL;
echo " • Source:\t{$pathArg}" . PHP_EOL;
echo " • Target:\t" . TargetDir . PHP_EOL;

$startTime = microtime(true);

try {
    $generator = new XsdToAbstractEntity($pathArg);
    $generator->processAll(TargetDir);
} catch (Exception $ex) {
    echo "EXCEPTION: {$ex}" . PHP_EOL;
    exit(1);
}

$endTime = microtime(true);
$timeDiff = round($endTime - $startTime, 3);

echo "✔ Done! ({$timeDiff}s)" . PHP_EOL;
exit(0);
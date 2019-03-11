<?php
require_once __DIR__ . '/vendor/autoload.php';

// ===== DateBasedFileNameGenerator
echo "====== Examples with DateBased Generator" . PHP_EOL;

$dateGenerator = new \PlaceholderX\DateBasedFileNameGenerator('Ymd_His');
echo $dateGenerator->getName() . PHP_EOL;
sleep(1);
echo $dateGenerator->setExtension('csv')->getName() . PHP_EOL;

// ===== SequenceBasedFileNameGenerator
echo "====== Examples with SequenceBased Generator" . PHP_EOL;

$sequenceGenerator = new \PlaceholderX\SequenceBasedFileNameGenerator;
echo $sequenceGenerator->getName() . PHP_EOL;
echo $sequenceGenerator->getName() . PHP_EOL;
echo $sequenceGenerator->setExtension('csv')->getName() . PHP_EOL;

// ===== RandomNameGenerator
echo "====== Examples with RandomName Generator" . PHP_EOL;

$randomGenerator = new \PlaceholderX\RandomNameGenerator;
echo $randomGenerator->getName() . PHP_EOL;
echo $randomGenerator->setExtension('csv')->getName() . PHP_EOL;

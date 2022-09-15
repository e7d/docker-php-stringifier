<?php

require('vendor/autoload.php');

use Laminas\Config\Reader\Json;
use Laminas\Config\Writer\PhpArray;

$reader = new Json();
$writer = new PhpArray($reader);

$config = $reader->fromString($argv[1]);
echo $writer->toString($config);

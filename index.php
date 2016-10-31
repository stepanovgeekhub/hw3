<?php

ini_set('display_errors', 'On');

require_once __DIR__.'/vendor/autoload.php';

$simpleClass = new \Vendor\Hw3\simpleClass();
echo 'abstract class example ====== <br>';
$simpleClass->printOut();
echo '<br>';
echo 'end abstract class example ====== <br>';

echo '====================== <br>';

$secondClass = new \Vendor\Hw3\secondClass();
echo 'poly example ====== <br>';
$secondClass->printOut();
echo '<br>';
echo 'end poly example ====== <br>';

echo '====================== <br>';

$interface = new \Vendor\Hw3\interfaceImplementsClass();
echo 'interface class example ====== <br>';
$interface->setVariable('name', 'Pavel');
echo '<br>';
echo 'end interface example ====== <br>';

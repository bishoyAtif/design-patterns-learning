<?php

require "vendor/autoload.php";

use App\Singleton;

echo "Creating Instance of the class singleton...\n";
$firstObject = Singleton::getInstance();

echo "Setting an object parameter to \"value\"\n";
$firstObject->setTestValue("value");

echo "Getting a second instance of the class singleton ...\n";
$secondObject = Singleton::getInstance();

echo "Checking the second object parameter ...\n";
echo "The parameter value of the second object is \"" . $secondObject->getTestValue() . "\"\n";

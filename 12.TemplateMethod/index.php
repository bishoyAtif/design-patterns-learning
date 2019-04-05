<?php

namespace App;

require "vendor/autoload.php";

$concreteCreatorOne = new ConcreteCreatorOne();
$concreteCreatorOne->executeAlgorithm();

echo "\n";

$concreteCreatorTwo = new ConcreteCreatorTwo();
$concreteCreatorTwo->executeAlgorithm();

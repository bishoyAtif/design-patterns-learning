<?php

require "vendor/autoload.php";

use App\RubberDuck;
use App\MuscovyDuck;
use App\FlyBehaviours\CannotFly;
use App\FlyBehaviours\FlyWithWings;

$rubberDuck = new RubberDuck(new CannotFly);
$muscovyDuck = new MuscovyDuck(new FlyWithWings);

echo "- Can rubber duck fly?\n# ";
$rubberDuck->fly();
echo "\n";

echo "- Can muscovy duck fly?\n# ";
$muscovyDuck->fly();
echo "\n";

echo "Tying our muscovy duck ... \n\n";
$muscovyDuck->setFlyingBehaviour(new CannotFly);
echo "- Can it fly now ?\n# ";
$muscovyDuck->fly();
<?php

require "vendor/autoload.php";

use App\Invoker;
use App\Receivers\Light;
use App\Receivers\Garage;
use App\Commands\TurnLightOn;
use App\Commands\OpenGarage;

$light = new Light();
$turnLightOn = new TurnLightOn($light);
$garage = new Garage();
$openGarage = new OpenGarage($garage);

$invoker = new Invoker();
echo "Assigning the button to turn the light on command ...\n";
$invoker->setCommand($turnLightOn);
echo "Pressing the button ...\n";
$invoker->invokeCommand();
echo "\n";

echo "Assigning the button to turn the open garage command ...\n";
$invoker->setCommand($openGarage);
echo "Pressing the button ...\n";
$invoker->invokeCommand();
echo "\n";

echo "Pressing the undo button ...\n";
$invoker->undoLastCommand();
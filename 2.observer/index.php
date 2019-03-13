<?php

namespace App;

require "vendor/autoload.php";

$weatherSource = new WeatherData;

// Instantiate Displays
$displayOne = new DisplayOne($weatherSource);
$displayTwo = new DisplayTwo($weatherSource);
$displayThree = new DisplayThree($weatherSource);

echo "Sending New Notification ...\n\n";
$weatherSource->notifyObservers("This is new Data Guys! :)");

echo "---------------------------\nRemoving Observer #2 ...\n";
$displayTwo->unsubscribe();

echo "Sending Another Notification ...\n\n";
$weatherSource->notifyObservers("This is another piece of data");

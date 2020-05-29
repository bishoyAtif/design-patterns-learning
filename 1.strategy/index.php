<?php

require "vendor/autoload.php";

use App\Navigator;
use App\RouteCalculators\WalkingRouteCalculator;
use App\RouteCalculators\CarRouteCalculator;

$navigator = new Navigator(new WalkingRouteCalculator);

echo "Walking Time : ";
echo $navigator->getRouteTime(1, 10);
echo "\n";

$navigator->setRouteCalculator(new CarRouteCalculator);
echo "Car Time : ";
echo $navigator->getRouteTime(1, 10);
echo "\n";
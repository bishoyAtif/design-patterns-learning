<?php

namespace App;

use App\Interfaces\RouteCalculatorInterface;

class Navigator
{
    public function __construct(RouteCalculatorInterface $routeCalculator)
    {
        $this->routeCalculator = $routeCalculator;
    }

    public function setRouteCalculator(RouteCalculatorInterface $routeCalculator)
    {
        $this->routeCalculator = $routeCalculator;
    }

    public function getRouteTime($source, $destination)
    {
        return $this->routeCalculator->calculateRouteTime($source, $destination);
    }
}

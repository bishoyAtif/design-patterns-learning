<?php
namespace App\RouteCalculators;

use App\Interfaces\RouteCalculatorInterface;

class WalkingRouteCalculator implements RouteCalculatorInterface
{
    public function calculateRouteTime($source, $destination)
    {
        return ($destination - $source) * 20;
    }    
}

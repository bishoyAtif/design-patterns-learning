<?php
namespace App\RouteCalculators;

use App\Interfaces\RouteCalculatorInterface;

class CarRouteCalculator implements RouteCalculatorInterface
{
    public function calculateRouteTime($source, $destination)
    {
        return ($destination - $source) * 5;
    }    
}

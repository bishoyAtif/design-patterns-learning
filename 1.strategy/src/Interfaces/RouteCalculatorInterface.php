<?php

namespace App\Interfaces;

interface RouteCalculatorInterface
{
    public function calculateRouteTime($source, $destination);
}


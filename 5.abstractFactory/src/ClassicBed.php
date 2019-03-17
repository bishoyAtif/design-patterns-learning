<?php

namespace App;

use App\Interfaces\BedInterface;

class ClassicBed implements BedInterface
{
    public function __construct()
    {
        echo "Classic Bed Created !\n";
    }
}
<?php

namespace App;

use App\Interfaces\BedInterface;

class ModernBed implements BedInterface
{
    public function __construct()
    {
        echo "Modern Bed Created !\n";
    }
}
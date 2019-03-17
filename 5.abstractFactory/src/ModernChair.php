<?php

namespace App;

use App\Interfaces\ChairInterface;

class ModernChair implements ChairInterface
{
    public function __construct()
    {
        echo "Modern Chair Created !\n";
    }
}
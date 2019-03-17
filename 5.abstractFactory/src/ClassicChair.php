<?php

namespace App;

use App\Interfaces\ChairInterface;

class ClassicChair implements ChairInterface
{
    public function __construct()
    {
        echo "Classic Chair Created !\n";
    }
}
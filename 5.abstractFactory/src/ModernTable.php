<?php

namespace App;

use App\Interfaces\TableInterface;

class ModernTable implements TableInterface
{
    public function __construct()
    {
        echo "Modern Table Created !\n";
    }
}
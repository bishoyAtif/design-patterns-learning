<?php

namespace App;

use App\Interfaces\TableInterface;

class ClassicTable implements TableInterface
{
    public function __construct()
    {
        echo "Classic Table Created !\n";
    }
}
<?php

namespace App;

use App\Interfaces\BaseFactoryInterface;
use App\Interfaces\BedInterface;
use App\Interfaces\ChairInterface;
use App\Interfaces\TableInterface;

class ModernWorkshop implements BaseFactoryInterface
{
    public function createBed(): BedInterface
    {
        return new ModernBed;
    }

    public function createChair(): ChairInterface
    {
        return new ModernChair;
    }

    public function createTable(): TableInterface
    {
        return new ModernTable;
    }
}
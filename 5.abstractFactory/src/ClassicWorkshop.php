<?php

namespace App;

use App\Interfaces\BaseFactoryInterface;
use App\Interfaces\BedInterface;
use App\Interfaces\ChairInterface;
use App\Interfaces\TableInterface;

class ClassicWorkshop implements BaseFactoryInterface
{
    public function createBed(): BedInterface
    {
        return new ClassicBed;
    }

    public function createChair(): ChairInterface
    {
        return new ClassicChair;
    }

    public function createTable(): TableInterface
    {
        return new ClassicTable;
    }
}
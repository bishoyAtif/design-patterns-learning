<?php

namespace App\Interfaces;

interface BaseFactoryInterface
{
    public function createChair() : ChairInterface;
    public function createTable() : TableInterface;
    public function createBed() : BedInterface;
}
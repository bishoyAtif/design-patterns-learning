<?php

namespace App\Interfaces;

interface CommandInterface
{
    public function execute();
    public function undo();
}
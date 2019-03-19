<?php

namespace App\Commands;

use App\Interfaces\CommandInterface;

class NoCommand implements CommandInterface
{
    public function execute()
    {
    }

    public function undo()
    {
    }
}
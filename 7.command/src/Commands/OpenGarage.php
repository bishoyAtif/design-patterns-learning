<?php

namespace App\Commands;

use App\Interfaces\CommandInterface;
use App\Receivers\Garage;

class OpenGarage implements CommandInterface
{
    protected $receiver;

    public function __construct(Garage $garage)
    {
        $this->receiver = $garage;
    }

    public function execute()
    {
        $this->receiver->open();
    }

    public function undo()
    {
        $this->receiver->close();
    }
}
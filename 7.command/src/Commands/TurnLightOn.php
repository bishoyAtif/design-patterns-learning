<?php

namespace App\Commands;

use App\Interfaces\CommandInterface;
use App\Receivers\Light;

class TurnLightOn implements CommandInterface
{
    protected $receiver;

    public function __construct(Light $light)
    {
        $this->receiver = $light;
    }

    public function execute()
    {
        $this->receiver->turnOn();
    }

    public function undo()
    {
        $this->receiver->turnOff();
    }
}
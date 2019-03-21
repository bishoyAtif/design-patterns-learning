<?php

namespace App\States;

use App\StateInterface;
use App\Gate;

class Closed implements StateInterface
{
    private $gate;

    public function __construct(Gate $gate)
    {
        $this->gate = $gate;
    }

    public function paymentSuccess()
    {
        echo "The gate is open, You can pass now!\n";
        $this->gate->setState($this->gate->getOpenState());
    }

    public function pass()
    {
        echo "The gate is closed you can't pass!\n";
    }

    public function paymentFailed()
    {
        echo "Sorry Payment Failed!\n";
    }
}
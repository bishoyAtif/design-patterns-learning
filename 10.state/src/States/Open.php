<?php
namespace App\States;

use App\StateInterface;
use App\Gate;

class Open implements StateInterface
{
    private $gate;

    public function __construct(Gate $gate)
    {
        $this->gate = $gate;
    }

    public function paymentSuccess()
    {
        echo "This action doesn't make sense here!\n";
    }

    public function pass()
    {
        echo "Welcome, bro :) You are in!\n";
        $this->gate->setState($this->gate->getClosedState());
    }

    public function paymentFailed()
    {
        echo "This action doesn't make sense here!\n";
    }
}
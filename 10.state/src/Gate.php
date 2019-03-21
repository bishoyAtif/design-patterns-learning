<?php

namespace App;

use App\States\Closed;
use App\States\Open;

class Gate
{
    private $openState;
    private $closedState;
    private $state;

    public function __construct()
    {
        $this->openState = new Open($this);
        $this->closedState = new Closed($this);
        $this->state = $this->closedState;
    }

    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }

    public function pass()
    {
        $this->state->pass();
    }

    public function paymentSuccess()
    {
        $this->state->paymentSuccess();
    }

    public function paymentFailed()
    {
        $this->state->paymentFailed();
    }

    public function getOpenState()
    {
        return $this->openState;
    }

    public function getClosedState()
    {
        return $this->closedState;
    }
}
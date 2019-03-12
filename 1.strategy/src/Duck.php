<?php

namespace App;

use App\Interfaces\FlyInterface;

abstract class Duck
{
    abstract public function display();

    public function __construct(FlyInterface $flyable)
    {
        $this->flyable = $flyable;
    }

    public function fly()
    {
        $this->flyable->fly();
    }

    public function setFlyingBehaviour(FlyInterface $newFlyable)
    {
        $this->flyable = $newFlyable;
    }
}

<?php

namespace App;

class CinemaFacade
{
    protected $popcorn;
    protected $tv;

    public function __construct()
    {
        $this->popcorn = new Popcorn();
        $this->tv = new TV();
    }

    public function prepare()
    {
        $this->popcorn->prepare();
        $this->popcorn->addSalt();
        $this->tv->turnOn();
        $this->tv->adjustVoice();
    }
}
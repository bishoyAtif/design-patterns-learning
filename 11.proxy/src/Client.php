<?php

namespace App;

class Client
{
    public $target;

    public function __construct(CommonInterface $target)
    {
        $this->target = $target;
    }

    public function doAnotherOperation()
    {
        echo "I'm doing operations related to the client!\n";
    }
}
<?php

namespace App;

class Coffee implements ProductInterface
{
    function getDescription()
    {
        return "Coffee";
    }

    public function cost()
    {
        return 5;
    }
}
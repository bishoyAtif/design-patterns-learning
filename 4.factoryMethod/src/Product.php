<?php

namespace App;

abstract class Product
{
    protected $name = null;

    public function getName()
    {
        return $this->name;
    }
}
<?php

namespace App;

abstract class BasicFactory
{
    public function order($type = "")
    {
        $product = $this->create($type);
        echo "Ordered " . $product->getName() . "\n";
    }

    abstract public function create($type) : Product;
}
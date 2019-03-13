<?php

namespace App;

abstract class AddOn implements ProductInterface
{
    protected $product;

    protected $cost = null;

    protected $description = null;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function cost()
    {
        return $this->product->cost() + $this->cost;
    }

    public function getDescription()
    {
        return $this->product->getDescription() . ", " . $this->description;
    }
}
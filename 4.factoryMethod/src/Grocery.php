<?php

namespace App;

class Grocery extends BasicFactory
{
    public function create($type): Product
    {
        if ($type == "fish") {
            return new Products\Fish();
        } elseif ($type == "rice") {
            return new Products\Rice();
        }

        return null;
    }
}
<?php

namespace App;

class Stationery extends BasicFactory
{
    public function create($type): Product
    {
        if ($type == "pen") {
            return new Products\Pen();
        } elseif ($type == "pencil") {
            return new Products\Pencil();
        }

        return null;
    }
}
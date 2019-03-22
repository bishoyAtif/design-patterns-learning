<?php

namespace App;

class HeavyClass implements CommonInterface
{
    public function __construct()
    {
        echo "Initializing the heavy class ... Please wait!\n";
    }

    public function doOperation()
    {
        echo "Operation Done!\n";
    }
}
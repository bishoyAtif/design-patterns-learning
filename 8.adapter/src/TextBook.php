<?php

namespace App;

use App\Interfaces\BookInterface;

class TextBook implements BookInterface
{
    public function open()
    {
        echo "Opening the book!\n";
    }

    public function turnPage()
    {
        echo "Turning the page!\n";
    }
}
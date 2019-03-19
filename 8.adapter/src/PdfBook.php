<?php

namespace App;

use App\Interfaces\KindleInterface;

class PdfBook implements KindleInterface
{
    public function pressPowerButton()
    {
        echo "Pressing the power button\n";
    }

    public function pressNextPageButton()
    {
        echo "Pressing the next page Button\n";
    }
}
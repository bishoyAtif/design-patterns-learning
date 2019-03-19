<?php

namespace App;

use App\Interfaces\BookInterface;
use App\Interfaces\KindleInterface;

class KindleAdapter implements BookInterface
{
    protected $kindle;

    public function __construct(KindleInterface $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        $this->kindle->pressPowerButton();
    }

    public function turnPage()
    {
        $this->kindle->pressNextPageButton();
    }
}
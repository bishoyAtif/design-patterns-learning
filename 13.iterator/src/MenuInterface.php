<?php

namespace App;

interface MenuInterface
{
    public function createIterator() : IteratorInterface;
}
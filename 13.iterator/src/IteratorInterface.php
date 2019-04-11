<?php

namespace App;

interface IteratorInterface
{
    public function next();
    public function hasNext() : bool;
}
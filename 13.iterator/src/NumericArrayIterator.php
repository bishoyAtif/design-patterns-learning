<?php

namespace App;

class NumericArrayIterator implements IteratorInterface
{
    private $menu;
    private $position;

    public function __construct(Array $menu){
        $this->menu = $menu;
        $this->position = 0;
    }

    public function hasNext() : bool{
        return ($this->position < count($this->menu) && $this->menu[$this->position] != null);
    }

    public function next(){
        $currentElement = $this->menu[$this->position];
        $this->position++;

        return $currentElement;
    }
}

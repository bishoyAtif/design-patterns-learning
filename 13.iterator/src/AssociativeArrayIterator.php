<?php

namespace App;

class AssociativeArrayIterator implements IteratorInterface
{
    private $menu;
    private $nextElement;

    public function __construct($menu){
        $this->menu = $menu;    
        $this->nextElement = reset($this->menu);
    }

    public function hasNext() : bool{
        return ($this->nextElement != false && $this->nextElement != null);
    }

    public function next(){
        $currentElement = key($this->menu) . " that is " . current($this->menu);
        $this->nextElement = next($this->menu);

        return $currentElement;
    }
}

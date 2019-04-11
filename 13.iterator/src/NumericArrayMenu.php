<?php

namespace App;

class NumericArrayMenu implements MenuInterface
{
    private $menuItems = [];

    public function __construct(){
        $this->addItem('Menu 1 -> Item 1');
        $this->addItem('Menu 1 -> Item 2');
        $this->addItem('Menu 1 -> Item 3');
    }

    public function createIterator() : IteratorInterface{
        return new NumericArrayIterator($this->menuItems);
    }

    private function addItem($item)
    {
        $this->menuItems[] = $item;
    }
}

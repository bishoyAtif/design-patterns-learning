<?php

namespace App;

class AssociativeArrayMenu implements MenuInterface
{
    private $menuItems = [];

    public function __construct(){
        $this->addItem('Menu 2 -> Item 1', 'desc 1');
        $this->addItem('Menu 2 -> Item 2', 'desc 2');
        $this->addItem('Menu 2 -> Item 3', 'desc 3');
    }

    public function createIterator() : IteratorInterface{
        return new AssociativeArrayIterator($this->menuItems);
    }

    private function addItem($item, $description)
    {
        $this->menuItems[$item] = $description;
    }
}

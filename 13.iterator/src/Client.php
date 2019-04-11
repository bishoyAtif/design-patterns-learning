<?php

namespace App;

class Client
{
    private $firstIterator;
    private $secondIterator;

    public function __construct(MenuInterface $firstMenu, MenuInterface $secondMenu){
        $this->firstIterator = $firstMenu->createIterator();
        $this->secondIterator = $secondMenu->createIterator();
    }

    public function printAllMenus(){
        $this->printItems($this->firstIterator);
        $this->printItems($this->secondIterator);
    }

    private function printItems(IteratorInterface $menuIterator){
        while ($menuIterator->hasNext()) {
            echo $menuIterator->next() . "\n";
        }
    }
}

<?php

namespace App;

class MenuItem extends BaseComponent
{
    protected $name, $indentationLevel;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getHtml(){
        $this->printIndented("<li>" . $this->getName() . "</li>\n");
    }
}

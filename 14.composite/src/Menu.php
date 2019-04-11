<?php

namespace App;

class Menu extends BaseComponent
{
    protected $components, $name, $indentationLevel;

    public function __construct($name = null){
        $this->components = [];
        $this->name = $name;
        $this->indentationLevel = 0;
    }

    public function add(BaseComponent $newComponent){
        $this->components[] = $newComponent;
    }

    public function getName(){
        return $this->name;
    }

    public function getHtml(){
        echo $this->name ? $this->printIndented("<h1> {$this->getName()} </h1>\n") : "";
        $this->printIndented("<ul>\n");
        foreach ($this->components as $component) {
            $component->setIndentationLevel($this->indentationLevel + 1);
            $component->getHtml();
        }
        $this->printIndented("</ul>\n");
    }
}

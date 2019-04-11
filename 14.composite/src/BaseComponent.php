<?php

namespace App;

abstract class BaseComponent
{
    public abstract function getHtml();

    public function add(BaseComponent $component)
    {
        echo "This method is not supported here!\n";
    }

    public function printIndented($text){
        echo str_repeat("  ", $this->indentationLevel) . $text;
    }

    public function setIndentationLevel(int $newLevel)
    {
        $this->indentationLevel = $newLevel;
    }

}
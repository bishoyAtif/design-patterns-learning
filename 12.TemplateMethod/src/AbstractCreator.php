<?php

namespace App;

abstract class AbstractCreator
{
    public function executeAlgorithm(){
        $this->doStepOne();
        $this->doStepTwo();
        $this->doStepThree();
    }

    private function doStepTwo()
    {
        echo "Doing General Step Two !\n";
    }

    abstract public function doStepOne();
    abstract public function doStepThree();
}

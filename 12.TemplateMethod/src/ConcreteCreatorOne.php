<?php

namespace App;

class ConcreteCreatorOne extends AbstractCreator
{
    public function doStepOne(){
        echo "Doing Step One from Creator #1\n";
    }

    public function doStepThree(){
        echo "Doing Step Three from Creator #1\n";
    }
}

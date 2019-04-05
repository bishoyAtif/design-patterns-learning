<?php

namespace App;

class ConcreteCreatorTwo extends AbstractCreator
{
    public function doStepOne(){
        echo "Doing Step One from Creator #2\n";
    }

    public function doStepThree(){
        echo "Doing Step Three from Creator #2\n";
    }
}

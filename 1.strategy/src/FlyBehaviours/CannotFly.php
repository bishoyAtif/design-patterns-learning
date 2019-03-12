<?php
namespace App\FlyBehaviours;

use App\Interfaces\FlyInterface;

class CannotFly implements FlyInterface
{
    public function fly()
    {
        echo "Sorry, I can't fly :(\n";
    }    
}

<?php
namespace App\FlyBehaviours;

use App\Interfaces\FlyInterface;

class FlyWithWings implements FlyInterface
{
    public function fly()
    {
        echo "Whoooo, I'm flying with wings!\n";
    }    
}

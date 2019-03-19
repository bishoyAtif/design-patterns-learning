<?php

require "vendor/autoload.php";

use App\CinemaFacade;
use App\Popcorn;
use App\TV;

// Making the calls manually
$tv = new TV();
$popcorn = new Popcorn();
$tv->turnOn();
$tv->adjustVoice();
$popcorn->prepare();
$popcorn->addSalt();
echo "\nUsing the facade ...\n";

// Making the calls using the facade
$cinemaFacade = new CinemaFacade();
$cinemaFacade->prepare();

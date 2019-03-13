<?php

require "vendor/autoload.php";

use App\Milk;
use App\ExtraSugar;
use App\Coffee;

$coffeeWithMilkWithExtraSugar = new Milk(new ExtraSugar(new Coffee));
echo $coffeeWithMilkWithExtraSugar->cost(); // 8
echo "\n";
echo $coffeeWithMilkWithExtraSugar->getDescription();
echo "\n\n";

$coffeeWithMilk = new Milk(new Coffee);
echo $coffeeWithMilk->cost(); // 7
echo "\n";
echo $coffeeWithMilk->getDescription();
echo "\n";


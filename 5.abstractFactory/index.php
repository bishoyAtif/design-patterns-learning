<?php

require "vendor/autoload.php";

use App\Client;
use App\ModernWorkshop;
use App\ClassicWorkshop;


$client = new Client(new ModernWorkshop);
$client->makeNewRoom();
echo "\nChanging the factory to Classic Workshop ...\n\n";
$client->setWorkshopFactory(new ClassicWorkshop);
$client->makeNewRoom();

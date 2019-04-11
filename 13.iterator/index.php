<?php

namespace App;

require "vendor/autoload.php";

$client = new Client(new NumericArrayMenu, new AssociativeArrayMenu);
$client->printAllMenus();
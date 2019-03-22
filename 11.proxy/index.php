<?php

require "vendor/autoload.php";

use App\Client;
use App\ProxyClass;

$client = new Client(new ProxyClass());

$client->doAnotherOperation();
$client->target->doOperation();
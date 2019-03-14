<?php

require "vendor/autoload.php";

use App\Stationery;
use App\Grocery;

$stationery = new Stationery();
$grocery = new Grocery();

$stationery->order("pen");
$grocery->order("fish");
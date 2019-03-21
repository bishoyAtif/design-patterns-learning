<?php

require "vendor/autoload.php";

use App\Gate;

$gate = new Gate();

echo "Trying to pass ...\n";
$gate->pass();

echo "\nPaying then pass again ...\n";
$gate->paymentSuccess();
$gate->pass();

echo "\nFailed to paying then try to pass\n";
$gate->paymentFailed();
$gate->pass();
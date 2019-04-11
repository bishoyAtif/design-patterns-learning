<?php

namespace App;

require "vendor/autoload.php";

$baseMenu = new Menu();
$levelOneChildOne = new MenuItem('Home');
$levelOneChildTwo = new MenuItem('About');
$levelOneMenu = new Menu('ContactUs');
$levelTwoChildOne = new MenuItem('Email');
$levelTwoChildTwo = new MenuItem('Phone');
$levelOneMenu->add($levelTwoChildOne);
$levelOneMenu->add($levelTwoChildTwo);

$baseMenu->add($levelOneChildOne);
$baseMenu->add($levelOneChildTwo);
$baseMenu->add($levelOneMenu);
$baseMenu->getHtml();
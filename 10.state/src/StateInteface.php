<?php
namespace App;

interface StateInterface
{
    public function pass();

    public function paymentSuccess();

    public function paymentFailed();
}
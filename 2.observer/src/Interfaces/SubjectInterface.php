<?php

namespace App\Interfaces;

interface SubjectInterface
{
    public function addObserver(ObserverInterface $observer);
    public function removeObserver(ObserverInterface $observer);
    public function notifyObservers($data);
}
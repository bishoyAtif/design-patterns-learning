<?php

namespace App;

use App\Interfaces\SubjectInterface;
use App\Interfaces\ObserverInterface;

class WeatherData implements SubjectInterface
{
    public $observers = [];

    public function addObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index >= 0) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers($newData)
    {
        foreach ($this->observers as $observer) {
            $observer->update($newData);
        }
    }
}
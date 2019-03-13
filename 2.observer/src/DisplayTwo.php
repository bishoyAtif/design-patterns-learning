<?php

namespace App;

use App\Interfaces\DisplayInterface;
use App\Interfaces\ObserverInterface;
use App\Interfaces\SubjectInterface;

class DisplayTwo implements DisplayInterface, ObserverInterface
{
    protected $subject;

    public function __construct(SubjectInterface $subject)
    {
        $this->subject = $subject;
        $this->subject->addObserver($this);
    }

    public function display($data = null)
    {
        echo "Display Two : {$data}\n";
    }

    public function update($data)
    {
        $this->display($data);
    }

    public function unsubscribe()
    {
        $this->subject->removeObserver($this);
    }
}
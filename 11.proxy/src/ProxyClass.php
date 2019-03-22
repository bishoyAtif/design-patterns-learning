<?php

namespace App;

/**
 * This class implements lazy loading for the target class. It initializes the heavy
 * class only when needed. Other that, It acts like the heavy class for the client.
 * The client doesn't even know that this is a proxy not the heavy class.
 */
class ProxyClass implements CommonInterface
{
    protected $subject = null;

    public function doOperation()
    {
        if ($this->subject == null) {
            $this->subject = new HeavyClass();
        }

        $this->subject->doOperation();
    }
}
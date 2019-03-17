<?php

namespace App;

class Singleton
{
    private static $instance = null;
    private $testValue;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getTestValue()
    {
        return $this->testValue;
    }

    public function setTestValue($newValue = null)
    {
        $this->testValue = $newValue;
    }
}
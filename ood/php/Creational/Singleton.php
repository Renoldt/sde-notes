<?php

class Singleton
{
    private static $instance;

    private function __construct()
    {
        // Private constructor to prevent instantiation from outside the class
    }

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function doSomething()
    {
        // Singleton functionality here
        echo 'Singleton functionality here';
    }
}

$singletonInstance = Singleton::getInstance();
$singletonInstance->doSomething();
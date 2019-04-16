<?php

class Person
{

    public $name = null;
    public $age = null;

    function __construct()
    {
        $this->name = readline();
        $this->age = readline();
    }

    function getFullData()
    {
        return $this->name . " " . $this->age . PHP_EOL;
    }
}

    $person = new Person();
    echo $person->getFullData();
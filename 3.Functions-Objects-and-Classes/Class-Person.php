<?php


class Person {

    public $name = null;
    public $age = null;

    function  __construct()
    {
        $this->name = null;
        $this->age = null;
    }

    function getFullData(){
        return 'Name:'.$this->name.PHP_EOL.
               'Age: '.$this->age.PHP_EOL;
    }
}

$person = new Person();
$person->name = 'Pesho';

echo(count(get_object_vars($person)));

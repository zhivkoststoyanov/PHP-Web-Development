<?php

class People {

    const limit = 30;
    
    /**
     *
     * @var int
     */
    private $age;
    
    /**
     *
     * @var string
     */
    
    private $name = 'test';

    public function __construct() {
        //$this->age = $age;
        //$this->name = $name;

        echo 'I am here, ';
    }

    private function getAge() {
        if (self::limit > $param) {
            return $this->age;
        }
    }

    private function getName() {
        if (self::limit > $param) {
            return $this->name;
        }
    }

    public function setAge($age) {
        if(!is_numeric($age)){
            throw new Exception('Not numeric value' );
        }
        $this->age = $age;
    }
    
    public function getAgeHTML(){
        return '<b>'.$this->age.'</b>';
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function __toString() {
        return $this->name;
    }

}



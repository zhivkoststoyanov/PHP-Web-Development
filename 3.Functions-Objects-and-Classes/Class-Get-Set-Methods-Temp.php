<?php

class Number {
    
    private $number;
    
    /**
     * Number constructor.
     * @param int $number
     */
    public function __construct(int $number){
        $this-> setNumber($number);
        
    }
    
    public function getNumber(){
        return $this-> number;
    }
    
    private function setNumber(int $number){
        //if(){
        // ...
        $this->number = $number;
    }
    
    
}

$num = 1024;
$number = new Number($num);
echo $number->getNumber();
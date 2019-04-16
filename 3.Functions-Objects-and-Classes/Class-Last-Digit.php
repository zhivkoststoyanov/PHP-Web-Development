<?php
class Number
{
    
    private $number;
    
    /**
     * Number constructor.
     * @param int $number
     */
    
    //Construct Method set private value
    public function __construct(int $number)
    {
        $this->setNumber($number);
        
    }
    
    //Get Methods are public
    public function getNumber()
    {
        return $this->number;
    }
    
    //Set Methods are private
    private function setNumber(int $number)
    {
        //if(){
        // ...
        $this->number = $number;
    }
    
    public function getLastDig()
    {
        
        switch ($this->number % 10) {
            case 1:
                echo "one";
                break;
            case 2:
                echo "two";
                break;
            case 3:
                echo "tree";
                break;
            case 4:
                echo "four";
                break;
            case 5:
                echo "five";
                break;
            case 6:
                echo "six";
                break;
            case 7:
                echo "seven";
                break;
            case 8:
                echo "eight";
                break;
            case 9:
                echo "nine";
                break;
            default:
                break;
        }
    }
}

$num = intval(readline());
$number = new Number($num);
$number->getLastDig();

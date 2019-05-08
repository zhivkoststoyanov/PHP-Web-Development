<?php

/**
 * Description of Teacher
 *
 * @author User
 */
class Teacher extends People {
        public $subject;
        
     /**
     * 
     * @param type $name
     * @param type $email
     * @param type $phone
      * @param type $subject
      *        
     */
    public function __construct($name, $email,$phone,$subject) {
        
        parent::__construct($name, $email, $phone);
        //$this->name = $name;
        //$this->email = $email;
        //$this->phone=$phone;
        $this->subject=$subject;
    }
        
        
    
        public function getData(){
        return $this->name. ':' .$this->email.':'.$this->phone.':'.$this->subject;
    }

}


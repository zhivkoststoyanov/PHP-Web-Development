<?php

/**
 * Description of People
 *
 * @author User
 */
class People {
    
    /**
     *
     * @var type string
     */
    protected $name;
    /**
     *
     * @var type string
     */
    protected $email;
    /**
     *
     * @var type string
     */
    protected $phone;
    
    
    /**
     * 
     * @param type $name
     * @param type $email
     * @param type $phone
     */
    protected function __construct($name, $email,$phone) {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPhone($phone);
    }
    
    
    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

        
    public function getData(){
        return $this->name. ':' .$this->email;
    }

  
}

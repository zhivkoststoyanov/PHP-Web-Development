<?php

    class Employee {

    /**
     * This is age limit
     */
    const age_limit = 16;
            
    /**
     * This is salary limit;
     */
    const salary_limit = 0;

    /**
     *
     * @var string
     */
    private $first_name;
    
    /**
     *
     * @var string
     */
    private $last_name;
    
    /**
     *
     * @var float
     */
    private $salary;
    
    /**
     *
     * @var integer
     */
    private $age;
    
    /**
     * 
     *
     */


    public function __construct($first_name, $last_name, $salary, $age) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->setSalary($salary);
        $this->setAge($age);
    }

    
    
    
    /**
     * 
     * @return type string
     */
    function getFirstName(): type {
        return $this->first_name;
    }

    /**
     * 
     * @return type string
     */
    function getLastName(): type {
        return $this->last_name;
    }

    /**
     * 
     * @return type float
     */
    function getSalary() {
        return $this->salary;
    }

    /**
     * 
     * @return \type integer
     */
    function getAge(): type {
        return $this->age;
    }

    function setFirstName(string $first_name) {
        $this->first_name = $first_name;
    }

    function setLastName(string $last_name) {
        $this->last_name = $last_name;
    }

    function setSalary(float $salary) {
        if($salary <= self::salary_limit){
            throw new Exception("Salary to loo");
        }
        $this->salary = $salary;
    }

    function setAge(int $age) {
        if($age <= self::age_limit){
            throw new Exception("You are too young!");
        }
        $this->age = $age;
    }
    
    public function __toString() {
                
        return $this->first_name.','.$this->last_name.','.$this->salary.','.$this->age;
        
    }



    
}

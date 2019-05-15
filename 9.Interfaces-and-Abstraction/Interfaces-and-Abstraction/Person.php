<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author User
 */

 
 class Person{
     private $name;
     private $email;
     
     function __construct($name, $email) {
         $this->name = $name;
         $this->email = $email;
     }
     
     public function printData(){
         echo $this->name;
     }
     
     function getName() {
         return $this->name;
     }

     function getEmail() {
         return $this->email;
     }


       

 }
 
 
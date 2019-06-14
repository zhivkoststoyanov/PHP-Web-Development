<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DB;

/**
 * Description of PDOResultSet
 *
 * @author User
 */
class PDOResultSet implements ResultSetInterface{
    
    
        
    private $pdostatement;
    
    function __construct($pdostatement) {
        $this->pdostatement = $pdostatement;
    }
    
    
    public function fetch($className) {
        while ($row = $this->pdostatement->fetchObject($className)){
            yield $row;
        }
    }

}

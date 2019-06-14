<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DB;

/**
 * Description of PDOPreparedStatement
 *
 * @author User
 */
class PDOPreparedStatement implements StatementInterface{
    
    private $pdostatement;
    
    function __construct($pdostatement) {
        $this->pdostatement = $pdostatement;
    }
        
    public function execute(array $params = array()): ResultSetInterface {
       $this->pdostatement->execute($params); 
       return new PDOResultSet($this->pdostatement);
    }
    

}

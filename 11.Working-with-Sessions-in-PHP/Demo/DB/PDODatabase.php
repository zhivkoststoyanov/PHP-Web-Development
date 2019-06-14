<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DB;

/**
 * Description of PDODatabase
 *
 * @author User
 */
class PDODatabase  implements DatabaseInterface {
    
    private  $pdo;
    
    function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    
    public function query(string $query): \DB\StatementInterface {
        $stmt = $this->pdo->prepare($query);
        return new PDOPreparedStatement($stmt);
    }
}

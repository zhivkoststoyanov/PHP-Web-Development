<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author User
 */

namespace DB;

class DBConnection {
    //put your code here
    		public static function getConnection(){
			return new \PDO ('mysql:host=localhost;dbname=shop','root', '',[\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
		}
}

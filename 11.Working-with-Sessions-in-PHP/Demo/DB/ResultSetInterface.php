<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DB;

/**
 *
 * @author User
 */
interface ResultSetInterface {
    
public function fetch($className);
    
}

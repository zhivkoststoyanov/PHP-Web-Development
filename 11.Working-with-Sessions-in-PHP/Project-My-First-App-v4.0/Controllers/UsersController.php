<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controllers;

/**
 * Description of UsersController
 *
 * @author User
 */

use Models\Users;

class UsersController extends Controller {
    
    function __construct($db_connection, string $controller_name) {
        
        parent::__construct($db_connection, $controller_name);
        $this->model = new Users($this->db_connection);
        
       
    }
    
    public function register(){
        if($_POST){
            $this->model->save($_POST);
            header('Location: /Project-My-First-App-v4.0/Products');
            exit;
        } else {
            $this->renderView(__FUNCTION__);
        }
    }
    
    
    public function login(){
        if($_POST){
            $user_id = $this->model->checkUser($_POST);
            if($user_id){
                $_SESSION['user_id'] = $user_id;
                header('Location: /Project-My-First-App-v4.0/');
                exit;
                
            }
            
            header('Location: /Project-My-First-App-v4.0/users/login?msg=notlogin');
            exit;
                
        }
        $this->renderView(__FUNCTION__);
    }

        public function chechSession() {
            if(!$_SESSION['user_id']){
            return null;
        }
        return true;
    }
}

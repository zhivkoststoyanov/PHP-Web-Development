<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controllers;

/**
 * Description of Controller
 *
 * @author User
 */
class Controller {
    
    /**
     * @var
     */
    protected $db_connection;
    /**
     *
     * @var Products
     */
    protected $model;
    
    /**
     *
     * @var string
     */
    protected $controller_name;
            
    
    
    function __construct($db_connection, string $controller_name) {
        
        $this->db_connection = $db_connection;
        $this->controller_name =$controller_name;
        //$this->model = new $this->controller_name($this->db_connection);
        
       
        if(!$this->chechSession()){
            header('Location: /Project-My-First-App-v4.0/users/login');
            exit;
        }

    }
    
    protected function renderView(string $view_name,array $data=[]){
        include ('Views/header.php');
        include ('Views/'.$view_name.'.php');
        include ('Views/footer.php');
    }
    
    public function chechSession(){
        print_r($_SESSION);
        if(!$_SESSION['user_id']){
            return false;
        }
        return true;
    }
}

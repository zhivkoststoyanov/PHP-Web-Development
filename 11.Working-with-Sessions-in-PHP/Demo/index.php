<?php

spl_autoload_register();
use DB\PDODatabase;

class User {
    private $username;
    private $password;
    
    /**
     * 
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    private function setUsername($username) {
        $this->username = $username;
    }

    private function setPassword($password) {
        $this->password = $password;
    }


}

$pdo = new PDO('mysql:host=localhost:3306;dbname=session_ex',
                'root','');

$db = new PDODatabase($pdo);
$stmt = $db->query("SELECT * FROM users");
$rs = $stmt->execute();
$allUsers = $rs->fetch(User::class);

foreach ($allUsers as $user){
    echo $user->getUsername() . " ". $user->getPassword() . "<br/>";
}

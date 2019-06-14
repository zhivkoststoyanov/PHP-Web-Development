<?php

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

$query = $pdo->prepare("SELECT * FROM users");
$query->execute();

//$allUsers = $query->fetchObject(User::class);

/**
 * $var User $user
 */
while($user=$query->fetchObject(User::class)){
    echo $user->getUsername() . " " .$user->getPassword()."<br/>";
            
            ;
}



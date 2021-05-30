<?php
require_once __DIR__.'/connection.php';
class User{
    private $email;
    private $password;

// -------------------------select admin

    function select($email,$password){
        $con = new Connection();
        $con1 = $con->sql;  //sql from the connection 
        $this->email=$email;
        $this->password=$password;

        $query=("SELECT * FROM admin WHERE email='".$this->email."'AND password='".$this->password."'");
        
        $result = $con1->prepare($query);

        $result->execute();

        $r= $result->fetchAll(PDO::FETCH_ASSOC);
        return $r;
    }
}
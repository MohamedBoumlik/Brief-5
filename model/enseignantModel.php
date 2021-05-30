<?php
require_once __DIR__.'/connection.php';
class Enseignant{
    private $id;
    private $name;
    private $email;
    private $password;
    private $matiere;

// -------------------------insert Enseignant

    function insert($name,$email,$password,$matiere,){
        $con =new Connection();
        $con1 = $con->sql;  //sql from the connection 
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
        $this->matiere=$matiere;

        $query=("INSERT INTO `enseignant`(`nameE`, `email`, `password`, `ID_matiere`) VALUES ('".$this->name."','".$this->email."','".$this->password."','".$this->matiere."')");
        
        $result = $con1->prepare($query);

        $result->execute();
    }

// -------------------------select Enseignant

function select($email,$password){
    $con = new Connection();
    $con1 = $con->sql;  //sql: from the connection 
    $this->email=$email;
    $this->password=$password;

    $query=("SELECT * FROM `enseignant` WHERE email ='".$this->email."' AND password ='".$this->password."'");
    
    $result = $con1->prepare($query);

    $result->execute();

    $r= $result->fetchAll(PDO::FETCH_ASSOC);
    return $r;
    }
}
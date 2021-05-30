<?php
require_once __DIR__."/../model/MatiereModel.php";
require_once __DIR__."/../model/enseignantModel.php";


class enseignantContro{

    function signup(){
        $obj =new Matiere();
        $matieres=Matiere::selectMatiere();
        require_once __DIR__."/../view/signup.php";

    }

    function inscrire()
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password= $_POST['password'];
        $matiere= $_POST['matiere'];
        $obj=new Enseignant();
        $obj->insert($name,$email,$password,$matiere);
        header("location:http://localhost/mvc2/Brief-5/login/index");
    }
}
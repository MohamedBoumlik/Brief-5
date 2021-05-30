<?php
session_start();

require_once __DIR__."/../model/userModel.php";
require_once __DIR__."/../model/enseignantModel.php";

class LoginContro
{
    function index(){

        require_once __DIR__."/../view/loginShow.php";
    }


    function signin()
    {
        if (isset($_POST['email'])){

            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $user=new User();
            $result = $user->select($email,$password);
            $enseignant = new Enseignant();
            $result1=$enseignant->select($email,$password);
           
            if(!empty($result)){

                $_SESSION['admin']=$result[0];
                header("location:http://localhost/mvc2/Brief-5/salle");


            }else if(!empty($result1)){
                
                    $_SESSION['enseignant']=$result1[0]['id'];
                    header("location:http://localhost/mvc2/Brief-5/reservation");
            
            }else {
          
            header("location:http://localhost/mvc2/Brief-5/login/index");

            }
        }
     }




    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        
        header("location:http://localhost/mvc2/Brief-5");
    }



}
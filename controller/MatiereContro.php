<?php
include_once __DIR__.'/../model/MatiereModel.php';
session_start();

class MatiereContro{
    
    function index()
	{
		if(isset($_SESSION['admin'])){
            $matieres=Matiere::selectMatiere();
            require __DIR__."/../view/Matiereshow.php";
        }else{
			header("location:http://localhost/mvc2/Brief-5");
        }
	}

// ----------------------- save -----------------------

    function save(){
        $obj = new Matiere();
        $obj->name=$_POST['name'];
        $obj->save();

        header("location:http://localhost/mvc2/Brief-5/matiere");
    }

// ----------------------- delete -----------------------

    function delete($id){
        $obj =new Matiere();
        $obj->delete($id);
        header("location:http://localhost/mvc2/Brief-5/matiere");
    }

// ----------------------- edit -----------------------

function edit($id)
{
    $obj= new Matiere();
    $obj1=$obj->selectOne($id);
    require __DIR__.'/../view/EditM.php';

}

// ----------------------- update -----------------------

function update($id)
{
    $obj= new Matiere();
    $obj->update([$_POST['name']],$id);
    header("location:http://localhost/mvc2/Brief-5/matiere");

}
}

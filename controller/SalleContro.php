<?php
include_once __DIR__.'/../model/SalleModel.php';
/**
 * 
 */
session_start();

class SalleContro
{
// ----------------------- index -----------------------
	
	function index()
	{
		if(isset($_SESSION['admin'])){
		$salles =SalleModel::getSalles();
		//print_r($salles);

		require __DIR__.'/../view/Salleshow.php';
		}else{
			header("location:http://localhost/mvc2/Brief-5");
		}

	}

// ----------------------- save -----------------------

	function save()
	{
		if(isset($_POST['add'])){
			$obj= new SalleModel();
			$count=count($_POST["capacite"]);
			for($n=0 ; $n<$count ; $n++){
				$obj->name= $_POST["libelle"][$n];
				$obj->cap= $_POST["capacite"][$n];
				$obj->save();
				header("location:http://localhost/mvc2/Brief-5/salle");
			}

		}

	}

// ----------------------- edit -----------------------

	function edit($id)
	{
		$obj= new SalleModel();
		$salle=$obj->selectOne($id);
		require __DIR__.'/../view/EditS.php';

	}

// ----------------------- update -----------------------

	function update($id)
	{
		$obj= new SalleModel();
		$obj->update([$_POST['name'],$_POST['cap']],$id);
		header("location:http://localhost/mvc2/Brief-5/salle");

	}

// ----------------------- delete -----------------------

	function delete($id)
	{
		$obj = new SalleModel();
		$obj->delete($id);
		header("location:http://localhost/mvc2/Brief-5/salle");
	}

	
}

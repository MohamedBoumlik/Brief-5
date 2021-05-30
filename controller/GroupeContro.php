<?php
include_once __DIR__.'/../model/Groupe.php';
/**
 * 
 */
session_start();
class GroupeContro
{
	
	function index()
	{
		if(isset($_SESSION['admin'])){	
			$groupes=Groupe::selectGroupes();
			require __DIR__."/../view/Groupeshow.php";
		}else{
			header("location:http://localhost/mvc2/Brief-5");
			
		}
	}

// ----------------------- save -----------------------

	function save()
	{
		
		$obj =new Groupe();
		$obj->name=$_POST['name'];
		$obj->cap=$_POST['cap'];
		$obj->save();
		
		header("location:http://localhost/mvc2/Brief-5/groupe");

	}

// ----------------------- edit -----------------------

	function edit($id)
	{
		$obj= new Groupe();
		$obj1=$obj->selectOne($id);
		require __DIR__.'/../view/EditG.php';
	}

// ----------------------- update -----------------------

	function update($id)
	{
		$obj= new Groupe();
		$obj->update([$_POST['name'],$_POST['cap']],$id);
		header("location:http://localhost/mvc2/Brief-5/groupe");
	}

// ----------------------- delete -----------------------

	function delete($id)
	{
		$obj = new Groupe();
		$obj->delete($id);
		header("location:http://localhost/mvc2/Brief-5/groupe");	
	}
}
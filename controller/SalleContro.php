<?php
include_once __DIR__.'/../model/SalleModel.php';
/**
 * 
 */
class SalleContro
{
	
	function index()
	{
		require_once __DIR__.'/../view/Salle.php';
	

	}
	public function show()
	{
		$ob=new Connetcion();
		$salles=$ob->getAll();
		require_once __DIR__.'/../view/Salle.php';

	}

	function create()
	{
		require_once __DIR__.'/../view/salle/create.php';
	}

	function save()
	{
		echo 'save';
	}

	function edit($id)
	{
		echo "edit ".$id;
	}

	function update()
	{
		echo 'update';
	}

	function delete()
	{
		echo 'delete';
	}
}

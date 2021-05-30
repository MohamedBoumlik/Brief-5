<?php
require_once __DIR__.'/connection.php';

// groupe model
class Groupe 
{

    public $name;
    public $cap;

    static function selectGroupes()
    {
        $cnt=new Connection();
        return $cnt->select("groupes");
    }

// ------------------------save

    function save()
    {
        $cnt=new Connection();
        $cnt->insert("groupes",["name","cap"],[$this->name,$this->cap]);
    }

// ------------------------delete

    function delete($id)
	{
        $cnt=new Connection();
		$cnt->delete("groupes",$id);
	}
	

    function selectGroupe($id)
    {
        $con= new Connection();
        return $con->selectById("groupes",$id);
    }
 
// ------------------------edit

    function selectOne($id)
    {
        $con= new Connection();
        return $con->edit("groupes",$id);
    } 

// ------------------------update

    function update($tabValue,$id)
    {
        $con=new Connection();
        $con->update("groupes",['name','cap'],$tabValue,$id);
    }
}
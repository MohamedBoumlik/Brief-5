<?php
require_once __DIR__.'/connection.php';

class Matiere{
    public $name;

    static function selectMatiere(){
        $con = new Connection();
        return $con->select("matiere");
    }

// ------------------------save

    function save(){
        $con = new Connection();
        $con->insert("matiere",["name"],[$this->name]);
    }

// ------------------------delete

    function delete($id){
        $con = new Connection();
        $con->delete("matiere",$id);
    }

// ------------------------edit

function selectOne($id){
    $con = new Connection();
    return $con->edit("matiere",$id);
}

// ------------------------update

function update($tabValue,$id){
    $con=new Connection();
    $con->update("matiere",["name"],$tabValue,$id);
}
}
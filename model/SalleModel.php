<?php
require_once __DIR__.'/connection.php';

class SalleModel {
    public $name;
    public $cap;

// ------------------------select

    static function getSalles()
    {
       $con = new Connection();
       return $con->select("salle");
    }

// ------------------------save

    function save(){
        $con = new Connection();
        $con->insert("salle",["libelle_S","capacite_S"],[$this->name, $this->cap]);
    }

// ------------------------delete

    function delete($id){
        $con = new Connection();
        $con->delete("salle",$id);
    }


    function selectSalle($id){
        $con = new Connection();
        return $con->selectById("salle",$id);
    }

// ------------------------edit

    function selectOne($id){
        $con = new Connection();
        return $con->edit("salle",$id);
    }

// ------------------------update

    function update($tabValue,$id){
        $con=new Connection();
        $con->update("salle",["libelle_S","capacite_S"],$tabValue,$id);
    }
}


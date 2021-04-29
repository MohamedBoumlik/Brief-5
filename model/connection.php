<?php

class Connetcion{
    public $servername= "localhost";
    public $dbname= "mvc";
    public $user="root";
    public $pass="";
    private $con;
    
    static function config(){
        try{
            $this->con = new PDO("mysql: host = localhost; dbname = mvc", "root","");
            return $con;
        }catch(PDOException $e){
            print "Connetion Failde :" . $e->getMessage() . "<br>";
        }
    }


//------------------------------------ select

    function getAll($table){
        $qry="select * from salle ";
        $this->con->query($qry);
        return $this->con->query($qry)->fetchAll();

        // if($row=$res->fetchAll()){
        //   return $row;
            
        // }
        // else{
        //     echo "n exec";

        // }
    }

//------------------------------------ delete

    function delete($table,$id){
        $qry = "delete from " .$table. "where id=" .$id;
        $this->con->query($qry);
    }


//------------------------------------insert

    function insert($table, $tabName, $tabValue){
        $name = "";
        $value = "";
        $vrg = "";
        
        for($i=0 ; $i<count($tabName) ; $i++){

            if($i>0){
                $vrg = ",";
            }

            $name.= $vrg."`".$tabName[$i]."`";
        }

        $vrg="";
        for($i=0 ; $i<count($tabValue) ; $i++){

            if(i>0){
                $vrg = ",";
            }

            $value.= $vrg."`".$tabValue[$i]."`";
        }
        
        $qry="INSERT INTO ".$table." (".$name.") VALUES (".$value.")";
        $this->con->query($qry);
    }

//------------------------------------update

    function update($table, $tabName ,$tabValue , $id){
        $name = "";
        $value = "";
        $vrg = "";

        for($i=0 ; $i<count($tabName) ; $i++){

            if($i>0){
                $vrg = ",";
            }

            $name.= $vrg."`".$tabName[$i]."`='".$tabValue[$i]."'";
        }

        $qry="UPDATE ".$table." SET ".$name." WHERE id=".$id;
        $this->sql->query($qry);
    }

//------------------------------------edite

    function edit($table , $id){
        $qry = "select * from ".$table." where id=".$id;
        return $this->con->query($qry)->fetchAll();
    }
}

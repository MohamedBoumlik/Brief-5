<?php
require_once __DIR__.'/connection.php';

class ReservationModel extends Connection{
    public $date;
    public $duree;
    public $salle;
    public $groupe;
    public $enseignant;

    public function __construct()
    {
        parent::__construct();
    }

// ------------------------select

    static function getReservation()
    {
       $con = new Connection();
       return $con->select("reservation");
    }

// ------------------------save

    function save($date,$duree,$enseignant,$salle,$groupe){
        $this->date=$date;
        $this->duree=$duree;
        $this->enseignant=$enseignant;
        $this->salle=$salle;
        $this->groupe=$groupe;

        $query="INSERT INTO `reservation`(`date`, `duree`, `id_enseignent`, `id_salle`, `id_groupe`) VALUES ('$date','$duree','$enseignant','$salle','$groupe')";  
        $conn= $this->sql->query($query);
    }


    function disponibilite($id,$duree,$date){

        $qry="SELECT * FROM `reservation` WHERE id_salle=$id AND duree='$duree' AND date='$date'";
        $conn= $this->sql->query($qry);
        $result=$conn->fetchAll(PDO::FETCH_ASSOC);

        if ($result){
        return $result[0];
        }
    
    }
    
// ------------------------delete

    function deletes($id){
        $con = new Connection();
        $con->delete("reservation",$id);
    }

}


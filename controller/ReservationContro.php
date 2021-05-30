<?php
require_once __DIR__."/../model/ReservationModel.php";
require_once __DIR__."/../model/SalleModel.php";
require_once __DIR__."/../model/Groupe.php";
session_start();
class ReservationContro{

    function index()
	{
		
		if(isset($_SESSION['enseignant'])){
		$salle=new SalleModel();
		$salles=$salle->getSalles();

		$groupe= new Groupe();
		$groupes=$groupe->selectGroupes();

		$reserv= new ReservationModel();
		$reservs=$reserv->getReservation();
		
		require __DIR__.'/../view/Reservation.php';
		
		}else{
			header("location:http://localhost/mvc2/Brief-5");
			
		}

	}

// ----------------------- save -----------------------

	function save()
	{
		$obj= new ReservationModel();
		$obj1=new SalleModel();
		$obj2=new Groupe();
		
		if(isset($_POST['salle'])&& isset($_POST['groupe'])){
			if(!empty($_POST['salle']) && !empty($_POST['groupe']) && !empty($_POST['date']) && !empty($_POST['duree'])){
				$date= $_POST["date"];
				$duree= $_POST["duree"];
				$salle= $_POST["salle"];
				$groupe= $_POST["groupe"];
				$enseignant= $_SESSION['enseignant'];

				if(($date>=date('Y-m-d'))){
					$salle1=$obj1->selectSalle($salle);
					$group1=$obj2->selectGroupe($groupe);

					if($group1['cap']<=$salle1['capacite_S']){
						$salle2=$obj->disponibilite($salle,$duree,$date);

						if(isset($salle2)){
							echo 'salle pas disponible';
						}else{
							$obj->save($date,$duree,$enseignant,$salle,$groupe);
							header("location:http://localhost/mvc2/Brief-5/reservation");
						}
					
					}else {
						echo "capacité insuffisante";
					}
					
				}else {
					echo "date invalide";
				}
			}
		}
	}

// // ----------------------- delete -----------------------

	function delete($id)
	{
		$obj = new ReservationModel();
		$obj->deletes($id);
		header("location:http://localhost/mvc2/Brief-5/reservation");
	}

}




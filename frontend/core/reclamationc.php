<?php
include "../config.php";
//include "../entite/reclamation.php";
class reclamationc {

	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (numero,nom,prenom,email,description,etat,date) values (:numero,:nom,:prenom,:email,:description,:etat,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$numero=$reclamation->getNumero();
        $etat=$reclamation->getEtat();
        $date=$reclamation->getDate();
        $email=$reclamation->getemail();
        $description=$reclamation->getDescription();
        $nom=$reclamation->getNom();
        $prenom=$reclamation->getPrenom();

		$req->bindValue(':numero',$numero);
		$req->bindValue(':description',$description);
		$req->bindValue(':date',date("Y-m-d") );
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':email',$email);
        $req->execute();
            return true ;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            return false ;
        }
		
	}


}

?>





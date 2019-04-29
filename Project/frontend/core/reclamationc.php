<?php
include "../config.php";
class reclamationc {

	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (numero,nom,prenom,email,type,description,etat,date) values (:numero,:nom,:prenom,:email,:type,:description,:etat,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$numero=$reclamation->getNumero();
        $etat=$reclamation->getEtat();
        $date=$reclamation->getDate();
        $email=$reclamation->getemail();
        $type=$reclamation->getType();
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
		$req->bindValue(':type',$type);
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





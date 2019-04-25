<?php
include "../config.php";
include "../entities/reclamation.php";
class reclamationc {
	

		function afficherReclamation1()
	{
		
		$sql=" SELECT * From reclamation ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($numero){
		$sql="DELETE FROM reclamation where numero= :numero";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numero',$numero);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierReclamation($numero,$etat)
	{
		$sql="UPDATE reclamation SET etat= :etat where numero= :numero";
		
		$db = config::getConnexion();
        $req=$db->prepare($sql);
if ($etat=='Non traite')
{
	$aa ='Traité';
}
else
{
	$aa ='Non traite';
}
    	 	$req->bindValue(':numero',$numero);
    	 	$req->bindvalue(':etat',$aa);  
        
		try {		
            $s=$req->execute();
        }
     catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}

}


?>





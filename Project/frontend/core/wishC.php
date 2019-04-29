<?php
include_once "../config.php";



 
class WishC 
{

	function ajouterwish($wish)
	{
		$sql="insert into wish (reference,email) values ( :reference,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $reference=$wish->getReference();
        $email=$wish->getemail();
       

        $req->bindValue(':reference',$reference);
        $req->bindValue(':email',$email);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function afficherwish()
	{
		
		$sql=" SELECT * From wish ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }	

	function supprimerwish($Reference,$email){


		$sql="DELETE FROM wish where Reference= :Reference AND email=:email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Reference',$Reference);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}

	
	  function recupererwish($Reference){
        $sql="SELECT * from produit where reference='$Reference'  ";

        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>






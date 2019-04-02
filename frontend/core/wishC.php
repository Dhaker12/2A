<?php
include "../config.php";

session_start();

 
class WishC 
{

	function ajouterwish($produit)
	{
		$sql="insert into produit (nom,reference,prix,description,cathegory,photo) values ( :nom,:reference,:prix,:description,:cathegory,:photo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$nom=$produit->getNom();
        $reference=$produit->getReference();
        $prix=$produit->getPrix();
        $description=$produit->getDescription();
        $cathegory=$produit->getCathegory();
        $photo=$produit->getPhoto();

        $req->bindValue(':nom',$nom);
        $req->bindValue(':reference',$reference);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':description',$description);
        $req->bindValue(':cathegory',$cathegory);
        $req->bindValue(':photo',$photo);


		
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

	function supprimerwish($Nom){


		$sql="DELETE FROM wish where Nom= :Nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Nom',$Nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}

	function modifierwish($ref,$new,$modwhat){
		if ($modwhat=="Reference") {
			$sql="UPDATE produit SET reference=:input WHERE reference=:ref";
		}
		if ($modwhat=="Prix") {
			$sql="UPDATE produit SET prix=:input WHERE reference=:ref";
		}
		if ($modwhat=="cathegory") {
			$sql="UPDATE produit SET cathegory=:input WHERE reference=:ref";
		}
		if ($modwhat=="Nom") {
			$sql="UPDATE produit SET nom=:input WHERE reference=:ref";
		}
		if ($modwhat=="Photo") {
			$sql="UPDATE produit SET photo=:input WHERE reference=:ref";
		}

		
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':input',$new);
		$req->bindValue(':ref',$ref);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
}
?>






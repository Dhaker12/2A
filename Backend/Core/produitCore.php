<?php
include "../config.php";

class ProduitCore 
{

	function AjouterProduit($produit)
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

	function afficherProduit()
	{
		
		$sql=" SELECT * From produit";
		$db = config::getConnexion();
		try{
		$lol=$db->prepare($sql);
		$lol->execute();
		$i=1;
		foreach ($db->query($sql) as $row) {
			echo'<tr>
														<td>'.$i++.'</td>
 														<td>'.$row['nom'].'</td>
														<td>'.$row['reference'].'</td>
 														<td>'.$row['prix'].'</td>
  														<td>'.$row['description'].'</td>
  														<td>'.$row['cathegory'].'</td>
  														<td><img style="width:40px;heigth:100px;"src="data:image/jpeg;base64,'.base64_encode(stripslashes($row['photo'])).'"></td>
													</tr>';
		}
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }	

	function SupprimerProduit($input,$selon){
		if ( $selon=="Reference") {
			$sql="DELETE FROM produit where upper(reference)= upper(:input)";
		}
		elseif ($selon=="Nom") {
			$sql="DELETE FROM produit where upper(nom)= upper(:input)";
		}
		elseif ($selon=="Prix") {
			$sql="DELETE FROM produit where upper(prix)= upper(:input)";
		}
		
		
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':input',$input);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierProduit($ref,$new,$modwhat){
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






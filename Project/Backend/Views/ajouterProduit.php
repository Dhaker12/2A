<?php
include "../entities/produit.php";
include "../core/produitCore.php";


if (isset($_POST['nom']) and isset($_POST['reference']) and  isset($_POST['prix']) and isset($_POST['description']) and isset($_POST['cathegory']) and !empty($_FILES['photo']['name'])) 
{
$photo=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
$produit1=new Produit($_POST['nom'],$_POST['reference'],$_POST['prix'],$_POST['description'],$_POST['cathegory'],$photo);

$produit1core=new ProduitCore();
$produit1core->AjouterProduit($produit1);
header('Location: forms-validation.html');
	
}
else{
	echo "vérifier les champs";
}





//*/

?>
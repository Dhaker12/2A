<?php
include "../core/reclamationc.php";
include "../entite/reclamation.php";

if ((isset($_GET['email'])) and (isset($_GET['nom'])) and (isset($_GET['prenom'])) and (isset($_GET['description'])))
{
$email=$_GET['email'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$description=$_GET['description'];

if ((!empty($_GET['email'])) and (!empty($_GET['nom'])) and (!empty($_GET['prenom']))  and (!empty($_GET['description'])) )
{
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){

 $msg= "The email you have entered is invalid, please try again.";
echo "<script type='text/javascript'>alert('$msg');</script>";

}
else{

$reclamation1=new reclamation(new \DateTime(),$numero,$description,"Non traite",$nom,$prenom,$email);
$reclamation1C=new reclamationc();
	$REC=$reclamation1C->ajouterReclamation($reclamation1);
	if($REC==true)
	{
		header('Location: store.html');
	}
}

}
else 
{
$message = "Vérifiez vos champs";
}
}

?>


<?php 

include "../core/reclamationc.php";
$reclamation1C=new reclamationc();
if (isset($_POST["numero"])){
$reclamation1C->supprimerReclamation($_POST["numero"]);
header('Location: affichageRec.php');
}
?>
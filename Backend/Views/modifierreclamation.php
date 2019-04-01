<?php

include "../core/reclamationc.php";
$reclamation1C=new reclamationc();
if ((isset($_POST["numero"])) and (isset($_POST["etat"])))
 {
$reclamation1C->modifierReclamation($_POST["numero"],$_POST["etat"]);
header('Location: affichageRec.php');
}
?>
<?PHP
include "../core/orderC.php";
$orderC=new orderC();

if (isset($_POST["ref"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="state" or $_POST["modwith"]=="delivery state" )  ) {
	$orderC->modifierorder($_POST["ref"],$_POST["new"],$_POST["modwith"]);
	header('Location: eya.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}

?>
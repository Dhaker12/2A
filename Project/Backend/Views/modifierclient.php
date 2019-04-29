<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if(empty($_POST["ref"]) )
{
	echo "Vous devez donnez la reference du produit ";
}
elseif (empty($_POST["new"])) 
{
	echo "Vous devez donner la nouvelle valeure";
}
else
{
if (isset($_POST["ref"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="last name" or $_POST["modwith"]=="first name" or $_POST["modwith"]=="email" or $_POST["modwith"]=="address" or $_POST["modwith"]=="company" )  ) {
	$clientC->modifierclient($_POST["ref"],$_POST["new"],$_POST["modwith"]);
	header('Location: modifierclient.html');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}
}
?>
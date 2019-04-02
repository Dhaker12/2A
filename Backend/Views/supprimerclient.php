<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_POST["email"])){
	$clientC->supprimerclient($_POST["email"]);
	header('Location: listec.php');
}

?>
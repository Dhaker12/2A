<?PHP
include "../core/feedC.php";
$feedC=new feedC();
if (isset($_POST["delete"])){
	$feedC->supprimerfeed($_POST["delete"]);
	header('Location: feedback.php');
}

?>
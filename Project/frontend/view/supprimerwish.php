<?PHP
session_start();
include "../core/wishC.php";
$wishC=new WishC();
if (isset($_POST["Nom"])&&isset($_POST["email"])){
	$wishC->supprimerwish($_POST["Nom"],$_POST["email"]);
	header('Location: wishlist.php');
}

?>
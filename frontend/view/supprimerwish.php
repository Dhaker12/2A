<?PHP
session_start();
include "../core/wishC.php";
$wishC=new WishC();
if (isset($_POST["Nom"])){
	$wishC->supprimerwish($_POST["Nom"]);
	header('Location: wishlist.php');
}

?>
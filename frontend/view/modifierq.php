<?PHP
include "../core/cartC.php";
$cartC=new cartC();
echo $_POST["quantite"];
echo $_POST["nom"];

if (isset($_POST["nom"]) ) {
	$cartC->modifiercart($_POST["quantite"],$_POST["nom"]);
	header('Location: store-cart.php');
	
}


?>
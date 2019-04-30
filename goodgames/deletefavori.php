<?PHP
include "C:/wamp64/www/goodgames/dist/core/favoriC.php";
include "C:/wamp64/www/goodgames/dist/entities/favori.php";
$favoriC=new favoriC();
if (isset($_GET['name'])){
	$favoriC->deletefavori($_GET['name']);
	header('Location: games.php');
}

?>
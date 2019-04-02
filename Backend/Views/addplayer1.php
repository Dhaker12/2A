<?PHP
include "../entities/player.php";
include "../core/playerC.php";
if (isset($_POST['name']) and isset($_POST['nick']) and isset($_POST['role']) and isset($_POST['kda']) and isset($_POST['kill'])and isset($_POST['bio'])){
$player1=new player($_POST['name'],$_POST['nick'],$_POST['role'],$_POST['kda'],$_POST['kill'],$_POST['bio'],$_POST['image']);

$player1C=new playerC();
$player1C->ajouterPlayer($player1);

	header('Location: addimagep.php');
}else{
	echo "vérifier les champs";
}


?>
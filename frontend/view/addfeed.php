<?PHP
include "../entities/feed.php";
include "../core/feedC.php";



if (isset($_POST['nom']) and isset($_POST['mail']) and isset($_POST['desc'])){
$feed1=new feed($_POST['nom'],$_POST['mail'],$_POST['desc']);

$feed1C=new feedC();
$feed1C->ajouterfeed($feed1);
header('Location: index.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>
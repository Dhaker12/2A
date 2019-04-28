<?PHP
include "../entities/team.php";
include "../core/teamC.php";
include "../core/playerC.php";

$donnee=explode(",",$_POST['names']);
if (sizeof($donnee)!=$_POST['nbr']) {
echo "<script type='text/javascript'>alert('nombre de joueur ne correspond pas à la selection');
window.location=window.history.back();
</script>";
//use double quotes for js inside php!


	# code...
}
elseif (isset($_POST['nom']) and isset($_POST['game']) and isset($_POST['nbr']) and isset($_POST['mail']) and isset($_POST['description']) and isset($_POST['names'])and isset($_POST['winr'])){

$team1=new team($_POST['nom'],$_POST['game'],$_POST['nbr'],$_POST['mail'],$_POST['description'],$_POST['names'],$_POST['image'],$_POST['winr']);
  
$team1C=new teamC();
$team1C->ajouterTeam($team1);
$donnee=explode(",",$_POST['names']);
$u=sizeof($donnee);
$player1C=new playerC();

foreach ($donnee as $val){ 
    $player1C->updatep($val,$_POST['nom']); 
} 

	header('Location: addimage.php');
}

else{
	echo "vérifier les champs";
}
//*/


?>
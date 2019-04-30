<?PHP
session_start();
include "C:/wamp64/www/goodgames/dist/core/replyC.php";
include "C:/wamp64/www/goodgames/dist/entities/reply.php";
$name=$_SESSION["l"];
if (isset($_POST['message']))
{
$reply1=new reply($name,$_POST['message']);

$reply1C=new replyC();
$reply1C->ajouterreply($reply1);
header('Location: news.php');
	
}
else{
	echo "vérifier les champs";
}


?>
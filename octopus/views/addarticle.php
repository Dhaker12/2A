<?PHP
include "../entities/Article.php";
include "../core/ArtcileC.php";
if (isset($_POST['name']) and isset($_POST['avatar']) and isset($_POST['description']) and isset($_POST['type']))
{
$article1=new article($_POST['name'],$_POST['avatar'],$_POST['description'],$_POST['type'],$_POST['image']);

$article1C=new ArticleC();
$article1C->ajouterarticle($article1);
header('Location: addimage2.php');
	
}
else{
	echo "vérifier les champs";
}


?>
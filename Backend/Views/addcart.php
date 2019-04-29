<?PHP
include "../entities/Article.php";
include "../core/ArtcileC.php";
if (isset($_POST['avatar']) and isset($_POST['type']) and isset($_POST['date']) and isset($_POST['description'])){
$article1=new article($_POST['avatar'],$_POST['type'],$_POST['date'],$_POST['description']);

$article1C=new ArticleC();
$article1C->ajouterarticle($article1);

	header('Location: pages-blank.html');
}else{
	echo "vérifier les champs";
}


?>
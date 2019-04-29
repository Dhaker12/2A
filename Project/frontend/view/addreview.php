<?php
include "../core/reviewCore.php";
include "../entite/review.php";


if ( isset($_POST['name']) and isset($_POST['country']) and isset($_POST['week']) and isset($_POST['message']) and isset($_POST['review-rate']) )
{

$name=$_POST['name'];
$country=$_POST['country'];
$week=$_POST['week'];
$message=$_POST['message'];
$rating=$_POST['review-rate'];

$review1=new review($name,$country,$week,$message,$rating,new \DateTime());
$review1core=new ReviewCore();
$review1core->ajouterReview($review1);
header('Location: product.php');
}
else{
	echo "vérifier les champs";
}
?>
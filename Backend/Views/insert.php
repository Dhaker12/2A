<?php
$connect = mysqli_connect("localhost", "root", "azizsahnoun5", "test");
if(isset($_POST["nom"], $_POST["names"], $_POST["winr"]))
{
 $nom = mysqli_real_escape_string($connect, $_POST["nom"]);
 $names = mysqli_real_escape_string($connect, $_POST["names"]);
 $winr = mysqli_real_escape_string($connect, $_POST["winr"]);
 $query = "INSERT INTO teams(nom, names ,winr) VALUES('$nom', '$names' ,'$winr')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
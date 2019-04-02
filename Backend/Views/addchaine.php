<?php
$connect = mysqli_connect("localhost", "root", "azizsahnoun5", "test");
if(isset($_POST["chaine"]))
{
 $chaine = mysqli_real_escape_string($connect, $_POST["chaine"]);
 $query = "INSERT INTO twitch(chaine) VALUES('$chaine')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
 header('Location: index.html');
}
?>

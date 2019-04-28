<?php
$connect = mysqli_connect("localhost", "root", "azizsahnoun5", "test");
if(isset($_POST["nick"], $_POST["kda"], $_POST["kills"]))
{
 $nick = mysqli_real_escape_string($connect, $_POST["nick"]);
 $kda = mysqli_real_escape_string($connect, $_POST["kda"]);
 $kills = mysqli_real_escape_string($connect, $_POST["kills"]);
 $clan = mysqli_real_escape_string($connect, $_POST["clan"]);

 $query = "INSERT INTO team(nick, kda ,kills,clan) VALUES('$nick', '$kda' ,'$kills','$clan')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
<?php
$connect = mysqli_connect("localhost", "root", "azizsahnoun5", "test");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM teams WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
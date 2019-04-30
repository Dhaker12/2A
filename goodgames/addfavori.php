<?php  
session_start();



            include "C:/wamp64/www/goodgames/dist/core/favoriC.php";
include "C:/wamp64/www/goodgames/dist/entities/favori.php";
            if (isset($_GET['name']))
            {
   $favoriC=new favoriC();
   $result=$favoriC->recupererjeu($_GET['name']);
  foreach($result as $row){

  $client=$_SESSION["l"];    
  $name=$row['name'];
  $description=$row['description'];
  $rating=$row['rating'];

          
}
 
   $favori1=new favori($name,$client,$description,$rating);
   $favori1C=new favoriC();
   $favori1C->ajouterfavori($favori1);
    header('Location: games.php');
   
}
 ?> 
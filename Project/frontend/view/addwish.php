<?php  
session_start();



            include "../core/wishC.php";
            include"../entities/wish.php";
            if (isset($_GET['reference']))
            {
   $wishC=new WishC();
   $result=$wishC->recupererwish($_GET['reference']);
  foreach($result as $row){
    
  $reference=$row['reference'];
  $email=$_SESSION['login'];

          
}
  

   $wish1=new Wish($reference,$email);
   $wish1C=new WishC();
   $wish1C->ajouterwish($wish1);
   header('Location: affproduit.php');
}
 ?> 
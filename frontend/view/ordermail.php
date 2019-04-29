<?php  
session_start();
$quantite='0';
$t='0';
/*
include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include "PHPMailer/src/SMTP.php";
include "../core/orderC.php"
$mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port= '465';
            $mail->SMTPAuth = true;
            $mail->Username = 'azizsahnoun5@gmail.com';
            $mail->Password = 'forward the past';
            $mail->SMTPSecure = 'ssl';
            $mail->From = 'eyabellil44@gmail.com';
            $mail->FromName = 'bellil';
            $mail->addAddress('eyabellil44@gmail.com', 'Order');
            $mail->WordWrap = 50;
            $mail->IsHtml(true);
            $mail->Subject = 'Nouvel Article dans notre catalogue';
            $mail->Body = 'confirmation eyaaaaaaaaaa';
            
            header('Location: index.html');*/
            include "../core/orderC.php";
            include"../entities/order.php";
            if (isset($_GET['login']))
            {
      $orderC=new orderC();
      $result=$orderC->recupererorder($_GET['login']);
      foreach($result as $row){
           $name=$_SESSION["fname"];
           $quantite=$row['quantite']+$quantite;
           $t=($row['prix']*$row['quantite'])+$t;
           echo 'eya';
          
}
   $order1=new order($name,$quantite,$t);
   $order1C=new orderC();
   $order1C->ajouterorder($order1);
   require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                //Sets Mailer to send message using SMTP
    $mail->Host = 'smtp.gmail.com';   //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '465';                //Sets the default SMTP server port
    $mail->SMTPAuth = true;             //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'azizsahnoun5@gmail.com';         //Sets SMTP username
    $mail->Password = 'forward the past';         //Sets SMTP password
    $mail->SMTPSecure = 'ssl';              //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = 'azizsahnoun5@gmail.com';          //Sets the From email address for the message
    $mail->FromName = 'no-reply';       //Sets the From name of the message
    $mail->AddAddress('abc@xyz.com', 'Name');   //Adds a "To" address
    $mail->WordWrap = 50;             //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);              //Sets message type to HTML       
    $mail->Subject = 'no-reply';       //Sets the Subject of the message
    $mail->Body = 'votre commande et en cours dexécution';        //An HTML or plain text message body
    if($mail->Send())               //Send an Email. Return true on success or false on error
    {
      $error = '<label class="text-success">Thank you for contacting us</label>';
    }
 // header('Location: store-checkout.php');
}
 ?> 
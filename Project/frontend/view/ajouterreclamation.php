<?php
include "../core/reclamationc.php";
include "../entite/reclamation.php";

if ((isset($_GET['email'])) and (isset($_GET['nom'])) and (isset($_GET['prenom'])) and (isset($_GET['description'])))
{
$email=$_GET['email'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$description=$_GET['description'];

if ((!empty($_GET['email'])) and (!empty($_GET['nom'])) and (!empty($_GET['prenom']))  and (!empty($_GET['description'])) )
{
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){

 $msg= "The email you have entered is invalid, please try again.";
echo "<script type='text/javascript'>alert('$msg');</script>";

}
else{

$reclamation1=new reclamation(new \DateTime(),$numero,$description,"Non traite",$nom,$prenom,$email);
$reclamation1C=new reclamationc();
	$REC=$reclamation1C->ajouterReclamation($reclamation1);
	if($REC==true)
	{
		header('Location: affproduit.php');
	}
}

}
else 
{
$message = "Vérifiez vos champs";
}
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/OAuth.php';
require 'PHPMailer/POP3.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();;

// SMTP configuration

	
//$mail->SMTPDebug = 4;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'dhaker.karous@esprit.tn';
$mail->Password = '25509722';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom( 'dhaker.karous@esprit.tn','Dhaker Karous');


// Add a recipient
$mail->addAddress($email);


// Add cc or bcc 
/*$mail->addCC('');
$mail->addBCC('bcc@example.com');*/ 

// Email subject
$mail->Subject ='reclamation';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
//$mailContent =
$mail->Body = 'votre reclamation est bien reçu ';


// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  
}else{
    echo 'Message has been sent';
   // header( 'http://localhost/2a7_php5/view/afficher_wishlist.php');
}
}

?>


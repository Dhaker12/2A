<?PHP
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
$mail->Username = 'azizsahnoun5@gmail.com';
$mail->Password = 'forward the past';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom( 'azizsahnoun5@gmail.com','aziz sahnoun');


// Add a recipient
$mail->addAddress('azizsahnoun5@gmail.com');


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

?>


<?PHP
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/OAuth.php';
require 'PHPMailer/POP3.php';
require 'PHPMailer/SMTP.php';
include "../core/feedC.php";
echo"lol1";
$feedC=new feedC();
if (isset($_POST["delete"])){

	$feedC->supprimerfeed($_POST["delete"]);
	header('Location: feedback.php');
}
elseif (isset($_POST["message"])){
	echo "lol3;";
	$mail = new PHPMailer\PHPMailer\PHPMailer();;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'azizsahnoun5@gmail.com';
$mail->Password = 'forward the past';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom( 'azizsahnoun5@gmail.com','aziz sahnoun');
$mail->addAddress($_POST["mail"]);
$mail->Subject ='responding to your feed-back';
$mail->isHTML(true);

$mail->Body = $_POST["message"];

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  
}else{
    echo 'Message has been sent';

}
header('Location: feedback.php');
}
?>


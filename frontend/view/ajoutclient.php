<?PHP
session_start();
include "../core/clientC.php";
include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include "PHPMailer/src/SMTP.php";

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['company']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['zip']) && isset($_POST['country']) && isset($_POST['password']))
{
$client1=new Client($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['company'],$_POST['city'],$_POST['email'],$_POST['phone'],$_POST['state'],$_POST['zip'],$_POST['country'],$_POST['password']);

$client1C=new ClientC();
$client1C->ajouterclient($client1);

$mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port= '465';
            $mail->SMTPAuth = true;
            $mail->Username = 'borjinisyrine@gmail.com';
            $mail->Password = 'I<3dogschien';
            $mail->SMTPSecure = 'ssl';
            $mail->From = 'borjinisyrine@gmail.com';
            $mail->FromName = 'last picks';
            $mail->addAddress('borjinisyrine@gmail.com', 'Clients');
            $mail->WordWrap = 50;
            $mail->IsHtml(true);
            $mail->Subject = 'New';
            $mail->Body = 'Wellcome';
            if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  
}else{
    echo 'Message has been sent';
   // header( 'http://localhost/2a7_php5/view/afficher_wishlist.php');
}
	header('Location: index-c.php');
}else
{
	echo "vérifier les champs";
}
//*/
 
 ?>
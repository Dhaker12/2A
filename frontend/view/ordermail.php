<?php  

include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include "PHPMailer/src/SMTP.php";
$mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port= '465';
            $mail->SMTPAuth = true;
            $mail->Username = 'eyabellil44@gmail.com';
            $mail->Password = '123456azerty@';
            $mail->SMTPSecure = 'ssl';
            $mail->From = 'eyabellil44@gmail.com';
            $mail->FromName = 'bellil';
            $mail->addAddress('eyabellil44@gmail.com', 'Order');
            $mail->WordWrap = 50;
            $mail->IsHtml(true);
            $mail->Subject = 'Nouvel Article dans notre catalogue';
            $mail->Body = 'confirmation eyaaaaaaaaaa';
            
            header('Location: index.html');
 ?>
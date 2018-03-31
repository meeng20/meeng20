
<?php

require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer();

		$mail->isSMTP();                                      
		$mail->Host = 'smtp.gmail.com';  
		$mail->SMTPAuth = true; 
		$mail->Username = 'ancunabillones@gmail.com';                 // SMTP username
		$mail->Password = 'imeememe';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            
		$mail->Port = 587;       
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);		

		$mail->setFrom('whiteplatescatering@gmail.com', 'White Plates');
		$mail->addAddress($email);     // recipient

		$mail->isHTML(true);                                 

		$mail->Subject = 'White Plates Catering Services Account Activation';
		$mail->Body    = '<!DOCTYPE html>
		<html>
		<head>
		<meta charset="UTF-8"><title>White Plates </title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;">White Plates Activaton of New email for your Account Mr. / Ms. '.$name.'</div><div style="padding:24px; font-size:17px;">From this email: '.$email1.'<br>This is your new email: '.$email .' ID'.$id.',<br/><br/>Click the link below to activate your email:<br/><br/><a href="http://localhost/meng5/activation.php?id='.$id.' && email='.$email.'&& password='.$password.'">Click here to activate your email now</a><br><br>Login after successful activation using your:<br>* New E-mail Address: <b>'.$email.'</b><br>* Password: <b>'.$password.'</div></body></html>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	session_destroy();
$msg= "Email Updated";

          header('Location:Emailsuccess.php?msg='.$msg.'');
exit();
}
?>

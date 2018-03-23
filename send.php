<?php
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['message'])) {

	$firstname = 	$_POST['firstname'];
	$lastname = 	$_POST['lastname'];
	$email = 		$_POST['email'];
	$message = 		$_POST['message'];
	
	$mail = new PHPMailer();
	
	$mail->From = $email;
	$mail->CharSet = "UTF-8";
	$mail->FromName = $email;
	$mail->addAddress("tejagiri23@gmail.com");
	
	$mail->IsHTML(true);
	$mail->Subject = $name." sent you an email";
	
	$mail->Body = $message."<br><br>".$name."<br>".$email."<br>".$phone."<br>";

	$mail->send();
}
?>   
            
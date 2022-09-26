<?php
session_start();
//$email="nontakranmn@gmail.com";
	$email=$_POST['email'];
	$otp=rand(11111,99999);
	$html="Your otp verification code is ".$otp;
	$_SESSION["email"]=$email;
	$_SESSION["otp"]=$otp;
	$_SESSION["otpdet"]=date("H:i:s");
	smtp_mailer($email,'รหัสOTPใช้สำหรับเข้าสู่ระบบ',$html);

function smtp_mailer($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 
	//$mail->Host = "smtp.gmail.com";
	//$mail->Port = 587; 
	//$mail->Username = "nontakranmn@gmail.com";
	//$mail->Password = "";


//	$mail->Host = "mail.thaicreate.com"; // sets GMAIL as the SMTP server
	$mail->Host = "192.1.1.120"; // sets SMTP server
	$mail->Port = 25;					// set the SMTP port for the Mail server
	$mail->Username = "webportal.sab@summitautogroup.com";	// MAIL username
	$mail->Password = "Intellinet";	// MAIL password
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->SetFrom("nontakranmn@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}
?>
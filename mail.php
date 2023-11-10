<?php
session_start();
$user_email = $_SESSION['useremail_c'];
include("connect.php");
include('smtp/PHPMailerAutoload.php');

$to=$user_email;
$html='C:\Users\dsubh\OneDrive\Desktop';

echo smtp_mailer($to,'Test',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "homesolutions729@gmail.com";
	$mail->Password = "sajeqcwrecnbexwv";
	$mail->SetFrom("homesolutions729@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>
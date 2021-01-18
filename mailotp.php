<?php
session_start();
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","25");

// if (isset($_POST['mailotp'])) {
$email=$_POST['email'];
echo("<script>console.log('Email Is: " . $email . "');</script>");
$msg=rand(100000,999999);
echo("<script>console.log('OTP is: " . $msg . "');</script>");
// $_SESSION['email']=$email; 
// $_SESSION['msg'=$msg;

$_SESSION['msg']=$msg;

require("phpmailer/class.phpmailer.php");
require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";// IP address or domain name
$mail->SMTPAuth = true;

$mail->SMTPSecure = "tls";

$mail->Port =25; //Email Port
$mail->Username = "singhsumit880@gmail.com";// Email address of your server
$mail->Password = "nyuaeckdtnkezzrj";// Email password

$mail->From = "singhsumit880@gmail.com"; //email address
$mail->Fromname = "Sumit";
$mail->AddAddress($email);
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

// Set email format to HTML
$mail->Subject = 'OTP';
$mail->Body = $msg;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

// }
?>
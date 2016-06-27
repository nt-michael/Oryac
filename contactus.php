<?php
require 'PHPMailer/PHPMailerAutoload.php';

$name = $_POST['username'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['text'];

$to_name = "noreply@oryac.org";
$to = "oryacc@gmail.com";
$subject = $subject;
$message = $msg;
$message = wordwrap($message,70);
 
$from_name = $name;
$from = $email;
// phpMailer
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com"; //enable php socks to make SSL it working
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Username = "oryacc@gmail.com";
$mail->Password = "foubizle";
 
$mail->FromName = $from_name;
$mail->From = $email;
$mail->AddAddress($to, $to_name);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->IsHTML(true);    
$result = $mail->Send();

header("location:contact.php?email=successfully sent");
echo $result ? 'Sent' : 'Error'; // this line is optional - comment out as your need
exit();
?>
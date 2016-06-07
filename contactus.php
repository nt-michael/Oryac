<?php
$to_name = "Recipient Name";
$to = "recipien_id@domain.com";
$subject = "Subject";
$message = "A quick brown fox juumped over the lazy dog.";
$message = wordwrap($message,70);
 
$from_name = "your_gmail_ID";
$from = "your_gmail_ID@gmail.com";
// phpMailer
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com"; //enable php socks to make SSL it working
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Username = "your_gmail_ID@gmail.com";
$mail->Password = "your_gmail_password";
 
$mail->FromName = $from_name;
$mail->From = $from;
$mail->AddAddress($to, $to_name);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->IsHTML(true);    
$result = $mail->Send();
echo $result ? 'Sent' : 'Error'; // this line is optional - comment out as your need
?>
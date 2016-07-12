<?php
// Include the database connection file
require_once("connection.php");
require 'PHPMailer/PHPMailerAutoload.php';

//check if the post request is set
if(isset($_POST)){
    //Get all the information from the post request
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $dob = $_POST["dob"];
    $country = $_POST["country"];
    $apt = $_POST["apt"];
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["password"]);
    $activation = md5($password . md5($email));

    if($password != $cpassword){
        die("Passwords do not match.");
    }

    $select_query = "SELECT * FROM users WHERE email='$email'";
    $res = mysql_query($select_query);
    $numRows = mysql_num_rows($res);

    if($numRows > 0){
        die("User email already exist in the Database, can't create account.");
    }

    $query = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `dob`, `email`, `tel`, `country`, `password`, `cpassword`, `personality`) VALUES ('', '$fname', '$lname', '$dob', '$email', '$tel', '$country', '$password', '$password', '$apt');";

    $results = mysql_query($query);
    if($results){
        //send an email with the link to the activation key

        //SMTP needs accurate times, and the PHP time zone MUST be set
        //This should be done in your php.ini, but this is how to do it if you don't have access to that
        date_default_timezone_set('Etc/UTC');

        //Create a new PHPMailer instance
        $mail = new PHPMailer();

        $message = "Hi,\n You have successfully registered to ORYAC...";
        $subject = "ORYAC Registration successful";

        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com"; //enable php socks to make SSL it working
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "oryacc@gmail.com";
        $mail->Password = "foubizle";
         
        $mail->FromName = "ORYAC Academic Career";
        $mail->From = "oryacc@gmail.com";
        $mail->AddAddress($email, $lname);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->IsHTML(true);    
        $result = $mail->Send();

        echo $result ? 'Activation email Sent' : 'Account Created but email not sent'; // this line is optional - comment out as your need
    }
}
?>
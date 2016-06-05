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
        die("User already exist in the Database, can't create account.");
    }

    $query = "INSERT INTO users VALUES ('', '$fname', '$lname', '$dob', '$email', '$tel', '$country', '$password', '$password', '$apt');";

    $results = mysql_query($query);
    if($results){
        //send an email with the link to the activation key

        //SMTP needs accurate times, and the PHP time zone MUST be set
        //This should be done in your php.ini, but this is how to do it if you don't have access to that
        date_default_timezone_set('Etc/UTC');

        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;

        //Ask for HTML-friendly debug output
        //$mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        $mail->Host = 'smtp.sendgrid.net';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "d3r1ck";

        //Password to use for SMTP authentication
        $mail->Password = "concatenate7801";

        //Set who the message is to be sent from
        $mail->setFrom($email, $fname);

        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress('no-reply@oryac.org', 'ORYAC');

        //Set the subject line
        $mail->Subject = 'ORYAC Registration successful';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

        //Replace the plain text body with one created manually
        $mail->Body = "Hi,\n You have successfully registered to ORYAC...";

        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');

        //send the message, check for errors
        if (!$mail->send()) {
            $status = "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $status = "Account created successfully, activate it!!!";
        }
        //echo "User registration successful";
        echo $status;
    } else {
        die("Error while creating user");
    }
}
//there was a problem with the post request
else {
    die("Bad request Error 400");
}
?>
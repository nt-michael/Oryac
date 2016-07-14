<?php
session_start();

include("../connection.php");

$id = $_SESSION["id"];
//echo "$id<br>";

	$fname  = 	$_POST["fname"];
	$lname 	=	$_POST["lname"];
	$email 	=	$_POST["email"];
	$dob	=	$_POST["dob"];
	$tel 	= 	$_POST["tel"];
	$tel2 	= 	$_POST["tel2"];
	$country= 	$_POST["country"];
	$level	=	$_POST["level"];
	$psw 	=	md5($_POST["psw"]);
	$psw2 	= 	md5($_POST["psw2"]);

	//echo $fname.$lname.$email.$dob.$tel.$tel2.$country.$level.$psw.$psw2;


	$new = "UPDATE `users` SET `first_name`= '$fname',`last_name`= '$lname',`dob`= '$dob',`email`= '$email',`tel`= '$tel',`country`= '$country',`password`= '$psw2',`cpassword`= '$psw2',`level`= '$level',`tel2`= '$tel2' WHERE `id` = '$id'";

	echo "<br>$new";
	
	$update = mysql_query($new) or die(mysql_error());

if ($update) {
		echo "<br>Successfully updated";
		
	$_SESSION["psw"] = $_POST["psw2"];
	
    $sql = "SELECT `id`, `first_name`, `last_name`, `dob`, `email`, `tel`, `country`, `password`, `cpassword`, `level`, `tel2`, `info` FROM `users` WHERE `id`='$id'";

    echo "$sql";
    $result = mysql_query($sql) or die(mysql_error());

    while ($profile = mysql_fetch_assoc($result)) {
		
		$_SESSION["id"]          = $profile['id'];
        $_SESSION["fname"]       = $profile['first_name'];
        $_SESSION["lname"]       = $profile['last_name'];
        $_SESSION["dob"]         = $profile['dob'];
        $_SESSION["email"]       = $profile['email'];
        $_SESSION["tel"]         = $profile['tel'];
        $_SESSION["country"]     = $profile['country'];
        $_SESSION["password"]    = $profile['password'];
        $_SESSION["cpassword"]   = $profile['cpassword'];
        $_SESSION["level"]       = $profile['level'];
        $_SESSION["tel2"]        = $profile['tel2'];
        $_SESSION["info"]        = $profile['info'];
        $_SESSION["country"]     = $profile['country'];
        //$_SESSION["personality"] = $profile['personality'];
    }
    header("location:../profile.php?Successfully updated your full profile.");
}
	else {
		echo "<br>Unsuccessfull";
	}
  
?>

<!--
 echo "
       {$profile['id']
       {$profile['first_name']}
       {$profile['last_name']}
       {$profile['dob']}
       {$profile['email']}
       {$profile['tel']}
       {$profile['country']}
       {$profile['password']}
       {$profile['cpassword']}
       {$profile['level']}
       {$profile['tel2']}
       {$profile['info']}
       {$profile['country']}
       ";
-->
<?php
session_start();

include("../connection.php");

$id = $_SESSION["id"];

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

	echo $fname.$lname.$email.$dob.$tel.$tel2.$country.$level.$psw.$psw2;


	$new = " UPDATE `users` SET `first_name`= '$fname',`last_name`= '$lname',`dob`= '$dob',`email`= '$email',`tel`= 'tel',`country`= '$country',`password`= '$psw',`cpassword`= '$psw2',`level`= '$level',`tel2`= '$tel2' WHERE `id` = '$d' ";

	$update = mysql_query($new) or die(mysql_error());

	if ($update) {
		echo "<br>Successfully updated";
	}
	else {
		echo "<br>Unsuccessfull";
	}

	//header("location:../profile.php?Successfully updated your full profile.");
?>
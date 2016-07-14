<?php
session_start();

include("../connection.php");

$info = $_POST["bg-info"];
$id = $_SESSION["id"];

//echo $info;

$bg = "UPDATE `users` SET `info`='$info' WHERE `id` = '$id'";

$bginfo = mysql_query($bg);

if($bginfo){
	$sq = "SELECT `info` FROM `users` WHERE `id`='$id'";

	$bgview = mysql_query($sq);

	while ($profile = mysql_fetch_assoc($bgview)) {

		$_SESSION["info"]  = $profile['info'];
	}

	header("location:../profile.php? your background information was successfully saved");
}
else{
	echo "An Error occured, please try again...";
	exit();
}

?>
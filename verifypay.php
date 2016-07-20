<?php
session_start();
$id = $_SESSION['id'];
$y = date(Y);
$i = 1;
require_once("connection.php");
$s = "SELECT * FROM `payment` WHERE `user`='".$id."' AND year = '".$y."' AND status = '".$i."'";

$q = mysql_query($s);
$num = mysql_num_rows($q);

if ($num == 1) {
	$_SESSION['status'] = 1;
	header('location:home.php?status = your account is upto-date');
}
else {
	header('location:payment.php?status = your account is suspended');
}
?>
<?php session_start(); ?>
<?php
	session_start();
	$_SESSION['in'] = 0;
	echo $_SESSION['in'];
	header('location:home.php?msg4=You have successfully logout');
?>
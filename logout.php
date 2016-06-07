<?php
	session_start();
	$_SESSION['in'] = 0;
	header('location:home.php?msg4=You have successfully logout');
?>
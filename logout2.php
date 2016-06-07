<?php
	session_start();
	$_SESSION['in'] = 0;
	header("location:{$_SERVER['HTTP_REFERER']}");
?>
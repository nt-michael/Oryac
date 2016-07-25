<?php
session_start();
	$_SESSION["mj"] = $_GET["mj"];
	$_SESSION["major_id"] = $_GET["m_id"];
	echo $_SESSION["mj"]." ".$_SESSION["major_id"];
	header("location:single.php");
?>
<?php
	session_start();
	$apt = $_SESSION["apt"];
	switch ($apt) {
		case 'Conventional':
			$aptt = 6;
			$_SESSION['aptt'] = $aptt;
			header("location:../major.php");
			break;
		case 'Enterprising':
			$aptt = 5;
			$_SESSION['aptt'] = $aptt;
			header("location:../major.php");
			break;
		case 'Social':
			$aptt = 4;
			$_SESSION['aptt'] = $aptt;
			header("location:../major.php");
			break;
		case 'Artistic':
			$aptt = 3;
			$_SESSION['aptt'] = $aptt;
			header("location:../major.php");
			break;
		case 'Investigative':
			$aptt = 2;
			$_SESSION['aptt'] = $aptt;
			header("location:../major.php");
			break;
		case 'Realistic':
			$aptt = 1;
			$_SESSION['aptt'] = $aptt;
			header("location:../major.php");
			break;

		default:
			header("location:home.php");
			break;
	}
?>
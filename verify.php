<?php 
session_start();
	if ( $_SESSION["in"] != 1 ) {
			header("location: index.php?msg3=you must be login before you can view this page");
	}
?>
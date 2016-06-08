<?php
session_start();
?>
<?php 
session_start();
	if ( $_SESSION["in"] != 1 ) {
			header("location: index.php?msg3=you must login before you can view this page");
	}
?>
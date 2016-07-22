<?php
session_start();
if ($_SESSION['in']==1) {
	echo "
		<div style='text-align: right;padding-right: 18%;padding-bottom: 2%;padding-top: 0%''>
			<a href='home.php'><b>Home</b>&nbsp;<span style='color:black;font-size: 20px' class='glyphicon glyphicon-home'></span></a>&nbsp;
			<a href='profile.php'><b>View profile</b>&nbsp;<span style='font-size: 20px;color:black' class='glyphicon glyphicon-user'></span></a>&nbsp;
			<a href='logout2.php'><b>Log out</b>&nbsp;<span style='font-size: 20px;color:black' class='glyphicon glyphicon-log-out'></span></a>
		</div>
	";
}

?>
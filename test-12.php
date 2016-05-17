<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Take Test</title>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/radio.css">
	<link rel="stylesheet" type="text/css" href="css/bg.css">
	<!-- The background image in css/bg.css is use with this link http://localhost:2000/img/foubs2.jpg... please take note of the port number when working with it on your machine
	-->
</head>
<body style="text-align: center">

	<?php include('navbar.php') ?>

	<div class="container">
		<div class="progress" style="border-radius: 0px 10px; width: 97%">
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100.0" aria-valuemin="0" aria-valuemax="100" style="width:100.0%">
			<strong style="font-size:20px">Done</strong> <span style="font-size:16px" class="glyphicon glyphicon-ok"></span>
			</div>
		</div>
		<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"></div>

		<div class="col-sm-6 col-md-6 col-ld-6">
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="signup.php" method="POST">
				<div class="form-group">

					<!--<legend>N<sup>o</sup> 70</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Balance a balance sheet or check book or manage personal finances:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1"  title="TRUE" name="q70" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10"  title="FALSE" name="q70" value="0" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 71</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Make charts and graphs:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2" title="TRUE" name="q71" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20" title="FALSE" name="q71" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 72</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Take or keep an inventory of supplies or stock:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3"  title="TRUE" name="q72" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30"  title="FALSE" name="q72" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 73</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Organize items in your room and house:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4"  title="TRUE" name="q73" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40"  title="FALSE" name="q73" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>


					<br/><br/>

					<!--<legend>N<sup>o</sup> 74</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Develop and follow efficient work routines :</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med5" title="TRUE" name="q74" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med50" title="FALSE" name="q74" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<button type="submit" class="btn btn-success" name="BTN">GO NEXT&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>

				</div>
			</form>
		</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<div class="well" style="width:90%; height:500px; border-right-color: green;border-right-width: 5px; border-bottom-width: 5px; border-bottom-color: green">	
			</div>
		</div>
		</div>
	</div>
</body>
</html>

<?php

	#if(isset($_POST["q64"]) && isset($_POST["q65"]) && isset($_POST["q66"] ) && isset($_POST["q67"]) && isset($_POST["q68"]) && isset($_POST["q69"])){
	$test11 = isset($_POST["q64"]) + isset($_POST["q65"]) + isset($_POST["q66"]) + isset($_POST["q67"]) + isset($_POST["q68"]) + isset($_POST["q69"]);
	//echo "This is a variable:".  $test11;
	$_SESSION["test11"] = "$test11";
	//echo "<br/>";
	//echo "this is a session: ".  $_SESSION["test11"];
	#}
?>
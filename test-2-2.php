<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Take Test</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/radio.css">
	<link rel="stylesheet" type="text/css" href="css/bg.css">
	<!-- The background image in css/bg.css is use with this link http://localhost:2000/img/foubs2.jpg... please take note of the port number when working with it on your machine
	-->
</head>
<body style="text-align: center;background:">

	<?php include('navbar.php') ?>

	<div class="container">
		<div class="progress" style="border-radius: 0px 10px;width: 97%">
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="16.66" aria-valuemin="0" aria-valuemax="100" style="width:16.66%; border-radius: 0px 10px">
				16.7%
			</div>
		</div>
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6 col-sm-6 col-lg-6">
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px; width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-3.php" method="POST">
				<div class="form-group">
					
					<!--<legend>N<sup>o</sup> 7</legend>-->
					<legend>Do you like to?</legend><br>
					<div class="row">
						<div class="col-md-6"style="text-align: right;">
							<strong>repair or work with machines/vehicles and electronic equipment’s</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: left">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q7-7" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q7-7" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q7-7" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q7-7" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q7-7" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 8</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align: right;">
							<strong>work outdoors</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: left;">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q8-8" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q8-8" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q8-8" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q8-8" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q8-8" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>	

					<br/><br/>

					<!--<legend>N<sup>o</sup> 9</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align: right;">
							<strong>be physically active</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: left; padding-bottom:">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q9-9" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q9-9" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q9-9" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q9-9" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q9-9" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 10</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align: right;">
							<strong>use your hands</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: left; padding-bottom:">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q10-10" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q10-10" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q10-10" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q10-10" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q10-10" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 11</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align: right;">
							<strong>build things</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: left; padding-bottom:">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q11-11" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q11-11" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q11-11" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q11-11" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q11-11" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 12</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align: right;">
							<strong>train animals</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: left; padding-bottom:">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q12-12" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q12-12" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q12-12" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q12-12" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q12-12" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>


					<br/><br/>

					<button type="submit" class="btn btn-success" name="BTN">GO NEXT&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
				</div>
			</form>
		</div>
		</div>
		<div class="col-md-4 col-sm-4 col-lg-4">
			<div class="well" style="width:90%; height:500px; border-right-color: green;border-right-width: 5px; border-bottom-width: 5px; border-bottom-color: green">
				
			</div>
		</div>
		</div>
	</div>
</body>
</html>
<?php

	#if(isset($_POST["q7"]) && isset($_POST["q8"]) && isset($_POST["q9"] ) && isset($_POST["q10"]) && isset($_POST["q11"]) && isset($_POST["q12"])){
	$test2 = isset($_POST["q7"]) + isset($_POST["q8"]) + isset($_POST["q9"]) + isset($_POST["q10"]) + isset($_POST["q11"]) + isset($_POST["q12"]);
	#echo $test2;
	#echo "<br/>";
	#echo $_SESSION["test1"];

	$test = $_SESSION["test1"];

	$test1_1 = $test2 + $test;
	$_SESSION["test1_1"] = "$test1_1";
	
	#echo "<br/>";
	#echo $_SESSION["test1_1"];
	#}
?>
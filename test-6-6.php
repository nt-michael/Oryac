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
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="49.98" aria-valuemin="0" aria-valuemax="100" style="width:49.98%">
				49.9%
			</div>
		</div>
		<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2 offset"></div>
		<div class="col-sm-6 col-md-6 col-lg-6">
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">

			<form class="form-inline" role="form" action="test-7.php" method="POST">
				<div class="form-group">

					<!--<legend>N<sup>o</sup> 32</legend>-->
					<legend>Can you?</legend>
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Sketch or draw or paint</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q31-31" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q31-31" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q31-31" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q31-31" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q31-31" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 33</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Play a musical instrument</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q32-32" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q32-32" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q32-32" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q32-32" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q32-32" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 34</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Write stories or poems or music</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q33-33" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q33-33" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q33-33" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q33-33" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q33-33" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 35</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Act or dance</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q34-34" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q34-34" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q34-34" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q34-34" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q34-34" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 36</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Sing</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q35-35" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q35-35" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q35-35" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q35-35" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q35-35" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend >N<sup>o</sup> 37</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Design fashions or interiors</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q36-36" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q36-36" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q36-36" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q36-36" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q36-36" class="biggest">&nbsp;&nbsp;

						    </label>
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

	#if(isset($_POST["q26"]) && isset($_POST["q27"]) && isset($_POST["q28"] ) && isset($_POST["q29"]) && isset($_POST["q30"]) && isset($_POST["q31"])){
	$test6 = isset($_POST["q31"]) + isset($_POST["q32"]) + isset($_POST["q33"]) + isset($_POST["q34"]) + isset($_POST["q35"]) + isset($_POST["q36"]);
	//echo "This is a variable:".  $test5;
	$_SESSION["test6"] = "$test6";

	$test5 = $_SESSION["test5"];

	$test6_6 = $test6 + $test5;
	$_SESSION["test6_6"] = "$test6_6";
	//echo "<br/>";
	//echo "this is a session: ".  $_SESSION["test5"];
	#}
?>
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
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="41.65" aria-valuemin="0" aria-valuemax="100" style="width:41.65%">
				41.6%
			</div>
		</div>
		<div class="row">
		<div class="col-md-2 col-sm-2 col-lg-2"></div>
		<div class="col-md-6 col-sm-6 col-lg-6">

		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-6.php" method="POST">
				<div class="form-group">
					
					<!--<legend>N<sup>o</sup> 26</legend>-->
					<legend>Are you?</legend>
					<div class="row">
						<div class="col-md-5"style="text-align:right;">
							<strong>Creative</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-7" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q25" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q25" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q25" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q25" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q25" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 27</legend>-->
					<div class="row">
						<div class="col-md-5"style="text-align:right">
							<strong>Unconventional</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-7" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q26" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q26" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q26" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q26" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q26" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 28</legend>-->
					<div class="row">
						<div class="col-md-5"style="text-align:right">
							<strong>Independent</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-7" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q27" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q27" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q27" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q27" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q27" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 29</legend>-->
					<div class="row">
						<div class="col-md-5"style="text-align:right">
							<strong>Impulsive</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-7" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q28" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q28" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q28" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q28" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q28" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 30</legend>-->
					<div class="row">
						<div class="col-md-5"style="text-align:right">
							<strong>Sensitive</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-7" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q29" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q29" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q29" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q29" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q29" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 31</legend>-->
					<div class="row">
						<div class="col-md-5"style="text-align:right">
							<strong>Courageous</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-7" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q30" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q30" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q30" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q30" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q30" class="biggest">&nbsp;&nbsp;

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

	#if(isset($_POST["q20"]) && isset($_POST["q21"]) && isset($_POST["q22"] ) && isset($_POST["q23"]) && isset($_POST["q24"]) && isset($_POST["q25"])){
	$test4 = isset($_POST["q19-19"]) + isset($_POST["q20-20"]) + isset($_POST["q21-21"]) + isset($_POST["q22-22"]) + isset($_POST["q23-23"]) + isset($_POST["q24-24"]);
	#echo $test4;
	#echo "<br/>";
	#echo $_SESSION["test3"];

	$test3_3 = $_SESSION["test3_3"];

	$test3_4 = $test4 + $test3_3;
	$_SESSION["test3_4"] = "$test3_4";
	
	#echo "<br/>";
	#echo $_SESSION["test3_4"];
	#}
?>
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/radio.css">
	<link rel="stylesheet" type="text/css" href="css/bg.css">
	<!-- The background image in css/bg.css is use with this link http://localhost:2000/img/foubs2.jpg... please take note of the port number when working with it on your machine
	-->
</head>

<body style="text-align: center">

	<?php include('navbar.php') ?>
	
	<div class="container">
		<div class="progress" style="border-radius: 0px 10px;width: 97%">
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="24.9" aria-valuemin="0" aria-valuemax="100" style="width:24.99%">
			24.9%
			</div>
		</div>
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6 col-sm-6 col-lg-">

		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px; width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-4.php" method="POST">
				<div class="form-group">
					
					<!--<legend>N<sup>o</sup> 13</legend>-->
					<legend>Are you?</legend>
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Curious</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q13" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q13" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q13" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q13" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q13" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 14</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>observant/precise</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q14" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q14" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q14" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q14" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q14" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 15</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>careful when you do things</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q15" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q15" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q15" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q15" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q15" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 16</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>intellectually self-confident</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q16" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q16" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q16" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q16" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q16" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 17</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Independent</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q17" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q17" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q17" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q17" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q17" class="biggest">&nbsp;&nbsp;

						    </label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 18</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Difficult to understand</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q18" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q18" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q18" class="neutral">&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q18" class="big">&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q18" class="biggest">&nbsp;&nbsp;

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
</body>
</html>

<?php

	#if(isset($_POST["q7"]) && isset($_POST["q8"]) && isset($_POST["q9"] ) && isset($_POST["q10"]) && isset($_POST["q11"]) && isset($_POST["q12"])){
	$test2_2 = isset($_POST["q7-7"]) + isset($_POST["q8-8"]) + isset($_POST["q9-9"]) + isset($_POST["q10-10"]) + isset($_POST["q11-11"]) + isset($_POST["q12-12"]);
	#echo $test2;
	#echo "<br/>";
	#echo $_SESSION["test1"];

	$test1_1 = $_SESSION["test1_1"];

	$test1_2 = $test2_2 + $test1_1;
	$_SESSION["test1_2"] = "$test1_2";
	
	#echo "<br/>";
	#echo $_SESSION["test1_2"];
	#}
?>
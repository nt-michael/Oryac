<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>ORYAC| Academic Personality Test</title>
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
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="66.64" aria-valuemin="0" aria-valuemax="100" style="width:70.0%">
			</div>
		</div>
		<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2 offset">	
		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">
		
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-9.php" method="POST">
				<div class="">

					<!--legend>N<sup>o</sup> 43</legend>-->
					<legend>Like to?</legend>
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Work in groups</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px;">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q43-43" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q43-43" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q43-43" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q43-43" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q43-43" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--legend>N<sup>o</sup> 47</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Help people with problems</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q44-44" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q44-44" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q44-44" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q44-44" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q44-44" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 48</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Do work without a pay</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q45-45" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q45-45" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q45-45" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q45-45" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q45-45" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>


					<br/><br/>

					<!--legend>N<sup>o</sup> 49</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Work with young people</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q46-46" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q46-46" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q46-46" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q46-46" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q46-46" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>


					<!--<legend>N<sup>o</sup> 50</legend>-->
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Serve others</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q47-47" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q47-47" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q47-47" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q47-47" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q47-47" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>Belong to clubs or attend conferences and networking meetings</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding: 0px">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q48-48" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q48-48" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q48-48" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q48-48" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q48-48" class="biggest" required>&nbsp;&nbsp;

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

	#if(isset($_POST["q46"]) && isset($_POST["q47"]) && isset($_POST["q48"] ) && isset($_POST["q49"]) && isset($_POST["q50"])) {
	$test8 = isset($_POST["q43"]) + isset($_POST["q44"]) + isset($_POST["q45"]) + isset($_POST["q46"]) + isset($_POST["q47"]) + isset($_POST["q48"]);
	//echo $test8;
	//echo "<br/>";
	//echo $_SESSION["test7"];

	$test7 = $_SESSION["test7"];

	$test7_7 = $test8 + $test7;
	$_SESSION["test7_7"] = "$test7_7";
	
	//echo "<br/>";
	//echo $_SESSION["test7_8"];
	#}
?>
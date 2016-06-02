
<?php
	session_start();
?>
<?php #include('navbar.php') ?>
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

<body style="text-align: center; "><!--#F5F5F5-->
<?php require('navbar.php') ?>
	

	
	
	<div class="container">
		<div class="progress" style="border-radius: 0px 10px;width: 97%">
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="8.33" aria-valuemin="0" aria-valuemax="100" style="width:8.33%; border-radius: 0px 10px">
			</div>
		</div>
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6 col-sm-6 col-lg-6">
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px; width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-2.php" method="POST">
				
				<!-- Place there values -->
				<div class="f">
					<!--<legend>N<sup>o</sup> 1</legend>-->
					<legend>Are You?</legend>
					<div class="row">
						<div class="col-md-6" style="text-align:right">
							<strong>An Independent person in behavior</strong>
						</div>
						
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right; padding-bottom:">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q1" class="biggest">&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q1" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q1" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q1" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q1" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
						
					</div>

					<br/><br/>


					<!--<legend>N<sup>o</sup> 2</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Straightforward/frank</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q2" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q2" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q2" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q2" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q2" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 3</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align: right;">
							<strong>Mechanically inclined</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q3" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q3" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q3" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q3" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q3" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 4</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align: right;">
							<strong>Ambitious</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q4" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q4" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q4" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q4" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q4" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 5</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align: right;">
							<strong>Self-controlled</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q5" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q5" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q5" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q5" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q5" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 6</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align: right">
							<strong>Reserved</strong>
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q6" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q6" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q6" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q6" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q6" class="biggest" required>&nbsp;&nbsp;

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
		<p style="font-size: 110%">
                    Following the vocational theory by John Holland, the activities people engage in and the work environments in the society can be categorized by a set of common characteristics.
		</div>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript">
$("#questionAnswerRadio").css("display", "block");
</script>
	
</body>
</html>
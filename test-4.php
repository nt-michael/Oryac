<?php
	session_start();
?>

<?php

if(isset($_POST["q13"]) && isset($_POST["q14"]) && isset($_POST["q15"] ) && isset($_POST["q16"]) && isset($_POST["q17"]) && isset($_POST["q18"]) ) {
	$t3 = array( $_POST["q13"], $_POST["q14"], $_POST["q15"], $_POST["q16"], $_POST["q17"], $_POST["q18"] );
	$test3 = array_sum($t3);
	#echo "This is a variable:".  $test3;
	$_SESSION["test3"] = $test3;
	#echo "<br/>";
	#echo "this is a session: ".  $_SESSION["test3"];
}
else {
	header('location: test.php');
}

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
		<div class="progress" style="border-radius: 0px 10px;width: 97%">
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="33.32" aria-valuemin="0" aria-valuemax="100" style="width:25.32%">
			</div>
		</div>
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
		<div class="jumbotron" style="width: 100%;background-color:white; border-radius: 60px 0px; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-4-4.php" method="POST">
				<div class="">
				
					<!--<legend>N<sup>o</sup> 20</legend>-->
					<legend>Can you?</legend>
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Think out of the box</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q19" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q19" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q19" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q19" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q19" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 21</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Solve math problems</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q20" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q20" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q20" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q20" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q20" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 22</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Understand scientific theories</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q21" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q21" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q21" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q21" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q21" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 23</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Do complex calculations</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q22" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q22" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q22" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q22" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q22" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 24</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Use a microscope or computer</strong>&nbsp;	
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q23" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q23" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q23" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q23" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q23" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 25</legend>-->
					<div class="row">
						<div class="col-md-6"style="text-align:right">
							<strong>Interpret formulas</strong>&nbsp;
						</div>
						<div id="questionAnswerRadio" class="col-md-6" style="text-align: right">
						    <label for="r_starkeAblehnung" class="css-label">
						        <input type="radio" id="r_starkeAblehnung" style="" value="4" name="q24" class="biggest" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_ablehnung" class="css-label">
						        <input type="radio" id="r_ablehnung" value="3" name="q24" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_neutral" class="css-label">
						        <input type="radio" id="r_neutral" value="2" name="q24" class="neutral" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_zustimmung" class="css-label">
						        <input type="radio" id="r_zustimmung" value="1" name="q24" class="big" required>&nbsp;&nbsp;

						    </label>
						    <label for="r_starkeZustimmung" class="css-label">
						        <input type="radio" id="r_starkeZustimmung" value="0" name="q24" class="biggest" required>&nbsp;&nbsp;

						    </label>
						</div>
					</div>


					<br/><br/>
					<button type="submit" class="btn btn-success" name="BTN">GO NEXT&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
				</div>

			</form>
		</div>
		</div>
		<div class="col-md-4">
			<div class="well" style="width:90%; height:500px; border-right-color: green; border-right-width: 5px; border-bottom-width: 5px; border-bottom-color: green">
			</div>
		</div>
		</div>
	</div>
</body>
</html>
<?php
  session_start();
?>

<?php
	
	#if(isset($_POST["q51"]) && isset($_POST["q52"]) && isset($_POST["q53"] ) && isset($_POST["q54"]) && isset($_POST["q55"]) && isset($_POST["q56"])){

		$test9 = isset($_POST["q51"]) + isset($_POST["q52"]) + isset($_POST["q53"]) + isset($_POST["q54"]) + isset($_POST["q55"]) + isset($_POST["q56"]);
		//echo "This is a variable:".  $test9;
		$_SESSION["test9"] = "$test9";
		//echo "<br/>";
		//echo "this is a session: ".  $_SESSION["test9"];
	#}
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
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="83.3" aria-valuemin="0" aria-valuemax="100" style="width:83.3%">
				83.3%
			</div>
		</div>
		<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2 offset"></div>
		<div class="col-sm-6 col-md-6 col-lg-6">
		
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-11.php" method="POST">
				<div class="form-group">
					<!-- Place there values -->
					<!--<legend>N<sup>o</sup> 57</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong> Be a member of the debate team:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1"  title="TRUE" name="q57" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10"  title="FALSE" name="q57" value="0" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 58</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Own or operate a small business or service :</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2" title="TRUE" name="q58" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20" title="FALSE" name="q58" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 59</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Manage a fund raising campaign for an organization or school</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3"  title="TRUE" name="q59" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30"  title="FALSE" name="q59" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>


					<br/><br/>

					<!--<legend>N<sup>o</sup> 60</legend>-->
					<div class="row">
					<div class="col-md-8" style="text-align:right">
							<strong>Entertain business clients:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4"  title="TRUE" name="q60" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40"  title="FALSE" name="q60" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 61</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Serve as a club leader:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med5" title="TRUE" name="q61" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med50" title="FALSE" name="q61" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 62</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Supervise a group of people:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med6" title="TRUE" name="q62" value="1" type="radio" required><span for="med6" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med60" title="FALSE" name="q62" value="0" type="radio" required><span for="med60" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>

						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 63</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Persuade others to accept your ideas:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med7"  title="TRUE" name="q63" value="1" type="radio" required><span for="med7" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med70"  title="FALSE" name="q63" value="0" type="radio" required><span for="med70" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
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
</body>
</html>
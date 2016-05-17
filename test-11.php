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
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="91.63" aria-valuemin="0" aria-valuemax="100" style="width:91.63%">
				91.6%
			</div>
		</div>
		<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2 offset"></div>

		<div class="col-sm-6 col-md-6 col-lg-6">

		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-12.php" method="POST">
				<div class="form-group">
					<!-- Place there values -->
					<!--<legend>N<sup>o</sup> 64</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Take the minutes of a meeting:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1"  title="TRUE" name="q64" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10"  title="FALSE" name="q64" value="0" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 65</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong> Keep the books/ records for a club:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2" title="TRUE" name="q65" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20" title="FALSE" name="q65" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 66</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Write business letters , memos or reports</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3"  title="TRUE" name="q66" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30"  title="FALSE" name="q66" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 67</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Work with numbers and financial data:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4"  title="TRUE" name="q67" value="1" type="radio" required><span dor="med4" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40"  title="FALSE" name="q67" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
							</div>
							</div>


							<br/><br/>

							<!--<legend>N<sup>o</sup> 68</legend>-->
							<div class="row">
								<div class="col-md-8" style="text-align:right">
									<strong>Collect and organize items such as t-shirts and coins.:</strong>&nbsp;
								</div>
								<div class="col-md-4">
									<label class="radio-inline"><input id="med5" title="TRUE" name="q68" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
									<label class="radio-inline"><input id="med50" title="FALSE" name="q68" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
								</div>
							</div>


							<br/><br/>

							<!--<legend>N<sup>o</sup> 69</legend>-->
							<div class="row">
								<div class="col-md-8" style="text-align:right">
									<strong>Operate computers and other business machines:</strong>&nbsp;
								</div>
								<div class="col-md-4">
									<label class="radio-inline"><input id="med6"  title="TRUE" name="q69" value="1" type="radio" required><span for="med6" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
									<label class="radio-inline"><input id="med60"  title="FALSE" name="q69" value="0" type="radio" required><span for="med60" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
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

	#if(isset($_POST["q57"]) && isset($_POST["q58"]) && isset($_POST["q59"] ) && isset($_POST["q60"]) && isset($_POST["q61"]) && isset($_POST["q62"]) && isset($_POST["q63"])){
	$test10 = isset($_POST["q57"]) + isset($_POST["q58"]) + isset($_POST["q59"]) + isset($_POST["q60"]) + isset($_POST["q61"]) + isset($_POST["q62"]) + isset($_POST["q63"]);
	//echo $test10;
	//echo "<br/>";
	//echo $_SESSION["test9"];

	$test9 = $_SESSION["test9"];

	$test9_10 = $test10 + $test9;
	$_SESSION["test9_10"] = "$test9_10";
	
	//echo "<br/>";
	//echo $_SESSION["test9_10"];
	#}
?>
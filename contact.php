
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="orientation, academic, career, guide, focus, mentor, counsellor, personality, tips.">
    <meta name="description" content="Academic Career Orientation.">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Oryac">
    <link rel="icon" type="image/png" href="img/favicon2.png">

	<title>ORYAC | Contact Us...</title>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/ionicons-2.0.1/css/ionicons.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons-2.0.1/css/ionicons.min.css">
	<link href="css/agency.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
 	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	hr.style1{
	border-top: 1px solid #8c8b8b;
	width: 100%;
	height: 50px;
}
.box{
	background-color: white;
	height: auto;
	width: 20%;
	padding:5px;
	text-align: center;
	font-size: 30px;
	font-family:roboto;

	
    -webkit-border-radius:10px 10px 0 0;
    -moz-border-radius:10px 10px 0 0;
    -ms-border-radius:10px 10px 0 0;
    -o-border-radius:10px 10px 0 0;
    border-radius:10px 10px 0 0;
	}
</style>

</head>

<body style="">

	<?php include('navbar2.php'); ?>

	<div class="container">	
		<div class="row" style="padding-left: 5%">
			<div style="color:#414042; font-size: 30px;font-family: Bebas"><b>Contact </b><span style="color:#88CC00; font-size: 30px;font-family: Bebas"><b>Us</b></span></b>
			</div>
			 <br>
			 <br>
			 <br>
		</div>
		<?php require_once('displayif.php'); ?>
		<div class="row" style="">
			<div class="row" style="margin-bottom: 5%">
				<div class="col-md-3" style="text-align: right;">
					<img src="img/logo-ii.png" title="Contact ORYAC" alt="ORYAC| Academic Career Orientation" style="width:100%;">
				</div>
				<div class="col-md-9" style="text-align:justify;padding-left: 10%">
					<p>
						Use the form below to to send us your message or your feedbacks.<br/>
						<ul>
						<li>Office Hours: 08h:00am - 05:00pm</li>
						<li><span class="yphicon glyphicon-envelope"></span><a href="mailto:oryacc@gmail.com" target="_blank" title="Send us an email">oryacc@gmail.com</a></li>
						<li><span class="glyphicon glyphicon-phone-alt"></span> +237 671 053 149</li>
						<li>Social Media:
							<ul>
							<li><a href="https://www.facebook.com/oryac.org/" target="_blank" title="ORYAC Facebook">Facebook</a></li>
							<li><a href="#" target="_blank" title="ORYAC Twitter">Twitter</a></li>
							</ul>
						</li>
						</ul>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5" style="padding-left: 5%">
					<form role="form" action="contactus.php" enctype="multipart/form-data" method="POST">
						<div class="form-group">
							<?php
								if (!empty($_GET['email']) ) {
									echo "<label>".$_GET['email']."</label>";
								}
							?>
						</div>
						<div class="form-group">
							<label for="usrname"><span class="glyphicon glyphicon-user"></span> Full Name</label>
							<input type="text" class="form-control" name="username" placeholder="Enter your full name here...">
						</div>

						<div class="form-group">
							<label for="email"><span class="glyphicon glyphicon-envelope"></span></span> Email Address</label>
							<input type="email" class="form-control" name="email" placeholder="Enter your full name here...">
						</div>

						<div class="form-group">
							<label for="object"><span class="glyphicon glyphicon-eye-open"></span> Object</label>
							<input type="text" class="form-control" name="subject" placeholder="Enter Object of your message here...">
						</div>

						<div class="form-group">
							<label for="textarea"><span class="glyphicon glyphicon-edit"></span>Place your Message</label><br>
							<textarea name="text" placeholder="Type your message here..." style="resize: none; width: 100%; height: 200px" maxlength="500"></textarea>Maximum of 500 words.
						</div>

						<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-send"></i> Send</button>
					</form>
				</div>
				<div class="col-md-5" style="padding-right: 15%">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15917.39829693825!2d9.261248275683585!3d4.15148440040013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x678ab270427d3276!2sCatholic+University+Institute+of+Buea!5e0!3m2!1sfr!2scm!4v1464890068440" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>
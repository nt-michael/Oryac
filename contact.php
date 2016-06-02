
<!DOCTYPE html>
<html>
<head>
	<title>ORYAC | About Us...</title>
	<link href="style.css" rel="stylesheet">
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
</style>

</head>

<body style="">

	<?php //include('navbar2.php'); ?>

	<div class="container">	
	<?php include('navbar2.php'); ?>
		<div class="row" style="padding-left: 5%">
			<h2><strong>Contact Us</strong></h2>
			<div style="padding-right: 20%">
			<?php include('line.php'); ?>
			</div>
		</div>
		<div class="row" style="">
			<div class="row" style="margin-bottom: 5%">
				<div class="col-md-3" style="text-align: right;">
					<img src="" title="About ORYAC" alt="contact-oryac.jpg" style="width:80%;height: 200px">
				</div>
				<div class="col-md-9" style="text-align:justify;padding-left: 10%">
					<p>
						Use the form below to to send us your message or your feedbacks.<br/>
						<ul>
						<li>Office Hours: 08h:00am - 05:00pm</li>
						<li>Email: info@oryac.org</li>
						<li>Tel: +237 xxx xxx xxx</li>
						<li>Social Media:
							<ul>
							<li>Facebook</li>
							<li>Twitter</li>
							<li>RSS</li>
							<li>Instagram</li>
							</ul>
						</li>
						</ul>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5" style="padding-left: 5%">
					<form role="form">
						<div class="form-group">
							<label for="usrname"><span class="glyphicon glyphicon-user"></span> Full Name</label>
							<input type="text" class="form-control" name="usrname" placeholder="Enter your full name here...">
						</div>

						<div class="form-group">
							<label for="email"><span class="glyphicon glyphicon-envelope"></span></span> Email Address</label>
							<input type="email" class="form-control" name="usrname" placeholder="Enter your full name here...">
						</div>

						<div class="form-group">
							<label for="object"><span class="glyphicon glyphicon-eye-open"></span> Object</label>
							<input type="text" class="form-control" name="psw" placeholder="Enter Object of your message here...">
						</div>

						<div class="form-group">
							<label for="textarea"><span class="glyphicon glyphicon-edit"></span>Place your Message</label><br>
							<textarea placeholder="Type your message here..." style="resize: none; width: 100%; height: 200px" maxlength="500"></textarea>Maximum of 500 words.
						</div>

						<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-send"></i> Send</button>
					</form>
				</div>
				<div class="col-md-5" style="padding-right: 15%">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25267.36627502466!2d9.224282763767324!3d4.149245461390779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x9e7b8a1e56109934!2sActivSpaces%2C+FakoShip+Plaza!5e0!3m2!1sen!2scm!4v1464798398473" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>
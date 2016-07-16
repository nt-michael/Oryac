
<!DOCTYPE html>
<html>
<head>
	<title>ORYAC | About Us...</title>
	<link href="style.css" rel="stylesheet">
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
			<div class="box">
				<strong>About <span style="color:orange">Us</span></strong>
			</div>
			 <br>
			 <br>
			 <br>
		</div>
		<?php require_once('displayif.php'); ?>
		<div class="row" style="">
			<div class="row">
				<div class="col-md-3" style="text-align: right;">
					<img src="img/logo-ii.png" title="About ORYAC" alt="ORYAC| Career Focused Orientation" style="width:100%;">
				</div>
				<div class="col-md-9" style="text-align:justify;padding-right: 20%">
					<p style="margin-top: 7%">
						Oryac is a leading technology education solution provider in Africa. We use cutting edge technologies to reach out to secondary and high school students and provide them with access to academic and career orientation services.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align: justify;padding-left: 6%;padding-right: 20%">
					<p><br>
						<strong>Vision:</strong> A world full of passion driven students and working population.<br/><br/>
						<strong>Mission:</strong> Provide the best Academic and Career orientation services to help students identify their true academic and career passion.
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>
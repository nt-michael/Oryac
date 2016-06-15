
<!DOCTYPE html>
<html>
<head>
	<title>ORYAC | Team...</title>
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

	<?php //include('navbar2.php'); ?>
	<?php include('navbar2.php'); ?>
	<div class="container">	
	<?php require_once('displayif.php'); ?>
		<div class="row" style="padding-left: 5%">

			<div class="box">
				<strong>Our <span style="color:orange">Team</span></strong>
			</div>
			 <br>
			 <br>
			 <br>
		</div>
		<div class="row" style="">
			<div class="row">
				<div class="col-md-3" style="text-align: right;">
					<img src="img/jeph.jpg" title="Founder ORYAC" alt="founder.jpg" style="width:80%">
				</div>
				<div class="col-md-9" style="text-align:justify;padding-right: 20%">
					<p>
					<legend>- Founder</legend>
						Ioudom Foubi Jephte is a final year student at the Catholic University Institute of Buea , studying management. He is a fellow of the Study of the United States Institutes on Social Entrepreneurship. He is passionate about education , leadership and youth empowerment.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7" style="text-align: justify;padding-left: 6%;">
					<p><br>
						<legend>- Co-Founder &amp; Software Engineer</legend>
						NDE T. Micha&euml;l is a Software Developer, and Community Manager for Buea WordPress Meetup in Cameroon, currently doing his studies at the Catholic University Institute of Buea, Cameroon
					</p>
				</div>
				<div class="col-md-5" style="text-align: left;padding-right: 15%">
					<img src="img/mike.jpg" class="img-rounded" title="Co-founder ORYAC" alt="cofounder.jpg" style="width: 60%">
				</div>
			</div>
			<div class="row"><br>
				<div class="col-md-3" style="text-align: right;">
					<img src="img/derick.png" class="img-rounded" title="Founder ORYAC" alt="Collaborator.jpg" style="width:70%">
				</div>
				<div class="col-md-9" style="text-align:justify;padding-right: 20%">
					<p>
					<legend>- Software Engineer</legend>
						ALANGI Derick is a Software Engineer, and representative of Wikidata Foundation in Cameroon, Currently doing his studies at the University of Buea.
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>
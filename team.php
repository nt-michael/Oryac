
<!DOCTYPE html>
<html>
<head>
	<title>ORYAC | Team...</title>
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
	<?php require_once('displayif.php'); ?>
		<div class="row" style="padding-left: 5%">
			<h2><strong>Team</strong></h2>
			<div style="padding-right: 20%">
			<?php include('line.php'); ?>
			</div>
		</div>
		<div class="row" style="">
			<div class="row">
				<div class="col-md-3" style="text-align: right;">
					<img src="" title="Founder ORYAC" alt="founder.jpg" style="width:80%;height: 200px">
				</div>
				<div class="col-md-9" style="text-align:justify;padding-right: 20%">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
						aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7" style="text-align: justify;padding-left: 6%;">
					<p><br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-md-5" style="text-align: left;padding-right: 15%">
					<img src="" title="Co-founder ORYAC" alt="cofounder.jpg" style="width:80%;height: 200px">
				</div>
			</div>
			<div class="row"><br>
				<div class="col-md-3" style="text-align: right;">
					<img src="" title="Founder ORYAC" alt="Collaborator.jpg" style="width:80%;height: 200px">
				</div>
				<div class="col-md-9" style="text-align:justify;padding-right: 20%">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
						aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>ORYAC | Welcome Home...</title>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
 	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/loading.css">

    <!---->
    <script src="js/jquery.js"></script>
    <style type="text/css">
          .no-js #loader { display: none;  }
          .js #loader { display: block; position: absolute; left: 100px; top: 0; }
          .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(img/Preloader_10.gif) center no-repeat #fff;
    }
    </style>

    <script type="text/javascript">
      //paste this code under the head tag or in a separate js file.
      // Wait for window load
        $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });
    </script>
<!-- preloading animation ends here -->

<style type="text/css">
	hr.style1{
	border-top: 1px solid #8c8b8b;
	width: 100%;
	height: 50px;
}

</style>

</head>

<body style="">
<div class="se-pre-con"></div>

<?php
	require_once('verify.php');
?>
	<div class="container">	
	<?php include('navbar2.php'); ?>
	<?php
        if (!empty($_GET['msg2'])) {
         echo $_GET['msg2'];
       }
    ?>
	<div style="text-align: right;padding-right: 18%;padding-bottom: 2%;padding-top: 0%">
			<a href="home.php">Home&nbsp;<span style="color:black;font-size: 20px" class="glyphicon glyphicon-home"></span></a>&nbsp;
			<a href="profile.php">View profile&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-user"></span></a>&nbsp;
			<a href="logout.php">Log out&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-log-out"></span></a>
	</div>
		<div class="row" style="padding-top: 7%">
				<div class="col-md-3" style="text-align: left;padding-left: 6%;">
					<img src="" title="home ORYAC" alt="personality.jpg" style="width:100%;height: 200px">
				</div>
				<div class="col-md-9" style="text-align:justify;padding-left:10%">
					<h2>Personality Of User</h2>
					<p><ul>
						<li>Learn more about your Academic Personality</li>
						<li>What is trending about this personality</li>
						<li>What next?...</li>
						</ul>
					</p>
				</div>
			</div>
		<div class="row" style="padding-left: 5%">
			<h2 style="text-align: right; padding-right: 20%"><strong>Description</strong></h2>
			<div style="padding-right: 20%">
			<?php include('line.php'); ?>
			</div>
		</div>
		<div class="row" style="padding-bottom: 5%">
			<div class="row">
				<div class="col-md-7" style="text-align: justify;padding-left: 6%;">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-md-5" style="text-align: left;padding-right: 15%">
					<img src="" title="Co-founder ORYAC" alt="cofounder.jpg" style="width:70%;height: 130px">
				</div>
			</div>
			<div class="row"><br>
				<div class="col-md-3" style="text-align:right;padding-left: 2%">
					<img src="" title="home ORYAC" alt="founder.jpg" style="width:70%;height: 130px">
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
		<div class="row" style="padding-left: 5%">
			<h2 style="text-align:;"><strong>What Are Majors</strong></h2>
			<div style="padding-right: 20%">
			<?php include('line.php'); ?>
			</div>
		</div>
	</div>
	<div class="row" style="text-align:justify;padding-left:10%;padding-right: 35%;text-align: justify;">
					<p><ul>
						<li>What is a Major:</li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
						aute irure dolor in reprehenderit </p>

						<li>Why should you take the IQ test:</li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
						aute irure dolor in reprehenderit </p>
						</ul>
					</p>
	</div>
	<p style="text-align: right;padding-right: 22%;font-size: 20px;"><a href="major.php" style="color:black;text-decoration: overline;background-color:orange ">View Majors</a></p>

	<?php include('footer.php'); ?>
</body>
</html>
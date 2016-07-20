<?php
session_start();
	include('verify.php');
	if ($_SESSION['status'] != 1) {
	header('location:payment.php?status=sorry your account is not up-to date');
}
?>
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
    <link rel="icon" type="image/x-icon" href="">

	<title>ORYAC | About Us...</title>

	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/ionicons-2.0.1/css/ionicons.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons-2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/image.css">
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
   	if (!empty($_GET['status'])) {
            echo  $_GET['status']."<br/>";
        }
?>

	<?php //include('navbar2.php'); ?>

	<div class="container">	
	<?php include('navbar2.php'); ?>
		<div style="text-align: right;padding-right: 18%;margin-top: 10%">
			<a href="home.php">Home&nbsp;<span style="color:black;font-size: 20px" class="glyphicon glyphicon-home"></span></a>&nbsp;
			<a href="profile.php">View profile&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-user"></span></a>&nbsp;
			<a href="logout.php">Log out&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-log-out"></span></a>
		</div>

		<div class="row" style="padding-left: 5%;padding-top: 5%">
			<h2><strong>Different Majors Pertaining To Your Personality</strong></h2>
			<div style="padding-right: 20%">
			<?php include('line.php'); ?>
			</div>
		</div>
		<div class="row">
				<div class="col-md-12" style="text-align: justify;padding-left: 6%;padding-right: 20%">
					<p><br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		<div class="row" style="padding-left: 5%">
			
			<div class="row" style="margin-top: 10%;">
				<div class="col-md-3">
					<div class="module" style="background-image: url(https://www.stopthehacker.com/wp-content/uploads/2013/01/Fotolia_48220935_Subscription_Monthly_L.jpg);">
						<header>
							<h3>
								<a style="color:white" href="single.php">Sample Major A</a>
							</h3>
						</header>
					</div>
				</div>
				<!-- Second major -->
				<div class="col-md-3">
					<div class="module" style="background-image: url(http://affairstoday.co.uk/wp-content/uploads/2015/10/elibrary.jpg); ">
						<header>
							<h3>
								<a style="color:white" href="#">Sample Major B</a>
							</h3>
						</header>
					</div>
				</div>
				<!-- Third major -->
				<div class="col-md-3">
					<div class="module" style="background-image: url(http://pad3.whstatic.com/images/thumb/9/95/Make-a-Study-Timetable-Step-7.jpg/aid676229-728px-Make-a-Study-Timetable-Step-7.jpg);">
						<header>
							<h3>
								<a style="color:white" href="#">Sample Major C</a>
							</h3>
						</header>
					</div>
				</div>
				<!-- Fourth major -->
			</div>
			<!-- Next line -->
			<div class="row" style="">
				<div class="col-md-3">
					<div class="module" style="background-image: url(http://www.study-habits.com/wp-content/uploads/2012/04/prepare-exams.jpg);">
						<header>
							<h3>
								<a style="color:white" href="#">Sample Major D</a>
							</h3>
						</header>
					</div>
				</div>
				<!-- Second major -->
				<div class="col-md-3">
					<div class="module" style="background-image: url(http://www.lawsonstate.edu/sites/www/Uploads/images/Programs_Of_Study/Academic_Programs/finalex.jpg); ">
						<header>
							<h3>
								<a style="color:white" href="#">Sample Major E</a>
							</h3>
						</header>
					</div>
				</div>
				<!-- Third major -->
				<div class="col-md-3">
					<div class="module" style="background-image: url(http://www.careerealism.com/wp-content/uploads/2012/10/Good-Resume-Featured.png);">
						<header>
							<h3>
								<a style="color:white" href="#">Sample Major F</a>
							</h3>
						</header>
					</div>
				</div>
			</div>
				<!-- Next -->
			<div class="row" style="">
				<div class="col-md-3">
					<div class="module" style="background-image: url(http://www.study-habits.com/wp-content/uploads/2012/04/prepare-exams.jpg);">
						<header>
							<h3>
								<a style="color:white" href="#">Sample Major G</a>
							</h3>
						</header>
					</div>
				</div>
				<!-- Second major -->
				<div class="col-md-3">
					<div class="module" style="background-image: url(http://www.lawsonstate.edu/sites/www/Uploads/images/Programs_Of_Study/Academic_Programs/finalex.jpg); ">
						<header>
							<h3>
								<a style="color:white" href="#">Sample Major H</a>
							</h3>
						</header>
					</div>
				</div>
				<!-- Third major -->
				<div class="col-md-3">
					<div class="module" style="background-image: url(http://www.careerealism.com/wp-content/uploads/2012/10/Good-Resume-Featured.png);">
						<header>
							<h3>
								<a style="color:white" href="#">Sample Major J</a>
							</h3>
						</header>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?><br>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/577fa4633c10d2ff1c99c288/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
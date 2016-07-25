<?php
session_start();
	include('verify.php');
	/*if ($_SESSION['status'] != 1) {
	header('location:payment.php?status=sorry your account is not up-to date');
	*/
//}
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
    <link rel="icon" type="image/png" href="img/favicon2.png">

	<title>ORYAC | Major...</title>

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

<body style="font-size: 11px;font-family: Joey; color:#414042;">
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
			<a href="home.php"><b>Home</b>&nbsp;<span style="color:black;font-size: 20px" class="glyphicon glyphicon-home"></span></a>&nbsp;
			<a href="profile.php"><b>View profile</b>&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-user"></span></a>&nbsp;
			<a href="logout.php"><b>Log out</b>&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-log-out"></span></a>
		</div>

		<div class="row" style="padding-left: 5%;padding-top: 5%">
			<h2><strong style="font-family:Bebas; color:#05774a;">Different Majors Pertaining To Your Personality</strong></h2>
			<div style="padding-right: 20%">
			<?php include('line.php'); ?>
			</div>
		</div>
		<div class="row">
				<div class="col-md-12" style="text-align: justify;padding-left: 4%;padding-right: 20%">
					<p><br>
						Discover the majors under the conventional academic personality type and their descriptions.
					</p>
				</div>
		</div>
		<div class="row" style="padding-left: 2.5%;padding-right: 18%;margin-top: 3%;">
				<?php
					require "connection.php";
					$id = $_SESSION["aptt"];
					$major = "SELECT `m_id`, `major`, `personality`, `major_img` FROM `major` WHERE `personality` = '".$id."' ";
					//echo $id;
					$list_of_majors = mysql_query($major);
					while ($list = mysql_fetch_assoc($list_of_majors)) {
						echo "
							<div class=\"col-md-3\">
								<div class=\"module\" style=\"background-image: url({$list['major_img']});\">
									<header>
										<h3>
											<a style=\"color:white\" href=\"mj-single.php?m_id={$list['m_id']}&mj={$list['major']} \">{$list['major']}</a>
										</h3>
									</header>
								</div>
							</div>
						";
					}
				?>
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
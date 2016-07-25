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

	<title>ORYAC | Sinlge Major...</title>
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

<body style="font-size: 12px;font-family: Joey; color:#414042;">
<div class="se-pre-con"></div>

	<?php //include('navbar2.php'); ?>

	<div class="container">	
		<?php include('navbar2.php'); ?>

		<div style="text-align: right;padding-right: 18%;padding-top: 10%">
		<?php
		   	if (!empty($_GET['status'])) {
		            echo  $_GET['status']."<br/>";
		        }
		?>
			<a href="home.php"><b>Home</b>&nbsp;<span style="color:black;font-size: 20px" class="glyphicon glyphicon-home"></span></a>&nbsp;
			<a href="profile.php"><b>View profile</b>&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-user"></span></a>&nbsp;
			<a href="logout.php"><b>Log out</b>&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-log-out"></span></a>
		</div>
		<div class="row" style="padding-top: 7%">
			<div class="col-md-3" style="text-align:right;padding-left: 6%;">
				<img src="" title="major ORYAC" alt="personality.jpg" style="width:100%;height: 200px">
			</div>
			<div class="col-md-9" style="text-align:justify;padding-left:10%">
				<h2 style="font-family: Bebas; color:#05774a;"><b><?php echo $_SESSION["mj"]; ?></b></h2>
				<p><ul style="font-size: 17px">
					<li><b>Learn more about this major</b></li>
					<li><b>Get To Know Where You Can Study This Major</b></li>
				</ul>
			</p>
			<a href="modal/modal.php">Back to List of Majors</a>
		</div>
	</div>
	<div class="row" style="padding-left: 5%;text-align: right">
		<h2 style="padding-right: 20%"><strong style="font-family: Bebas;color:#05774a;">Brief Description</strong></h2>
		<div style="padding-right: 20%">
			<?php include('line.php'); ?>
		</div>
	</div>

	<div class="row" style="">
		<div class="row" style="padding-bottom: 10%">
			<div class="col-md-7" style="text-align: justify;padding-left: 6%;">
				<p>
				<?php
					require "connection.php";
					$id = $_SESSION["major_id"];
					$pers = $_SESSION["aptt"];
					$desc_major = "SELECT `id`, `desc`, `m_id`, `pers_id` FROM `description` WHERE id = '".$id." ' AND pers_id = '".$pers."'";
					//echo $id;
					$desc = mysql_query($desc_major);
					while ($row = mysql_fetch_assoc($desc)) {
						echo "
							{$row['desc']}
						";
					}
				?>
				</p>
			</div>
			<div class="col-md-5" style="text-align: left;padding-right: 15%">
			</div>
		</div><br>

		<div class="row" style="padding-left: 5%;text-align: ">
			<h2 style="padding-right: 20%"><strong style="font-family: Bebas;color:#05774a;">Background Pre-Requisit</strong></h2>
			<div style="padding-right: 20%">
				<?php include('line.php'); ?>
			</div>
		</div>

		<div class="row" style="padding-bottom: 10%"><br>
			<div class="col-md-3" style="text-align: right;">
				
			</div>
			<div class="col-md-9" style="text-align:justify;padding-right: 25%">
				<p>
					For you to qualify to do this major, you need to fulfill the following minimum requirements.
					<p>
						<ul style="padding-left: 5%;font-size: 15px"><b>
							<?php
								include "connection.php";
								$id = $_SESSION["major_id"];
								$pers = $_SESSION["aptt"];
								$req_major = "SELECT `r_id`, `requisit`, `major_id`, `apt_id` FROM `requisit` WHERE major_id = '".$id."' AND apt_id = '".$pers."'";
								//echo $req_major;
								$rqt = mysql_query($req_major);
								while ($row = mysql_fetch_assoc($rqt)) {
									echo "
										<li>{$row['requisit']}</li>
									";
								}
							?>
							</b>
						</ul>
					</p>
				</p>
			</div>
		</div>

		<div class="row" style="padding-left: 5%;text-align: ">
			<h2 style="padding-right: 20%"><strong style="color:#05774a; font-family: Bebas">Possible schools</strong></h2>
			<div style="padding-right: 20%">
				<?php include('line.php'); ?>
			</div>
		</div>
		<div class="row"><br>
			<div class="col-md-3" style="text-align: right;">
			</div>
			<div class="col-md-9" style="text-align:justify;padding-right: 25%">
				<p>
					The following schools offer a Bachelor degree in <?php echo $_SESSION["mj"] ; ?>, which will open the doors to the <?php echo $_GET["mj"]; ?> profession or career. Follow the link to discover more about the university and the specific entry requirements for your major.
				</p>
			</div>
		</div>
		<div class="row" style="padding-left: 2.5%;padding-right: 18%;margin-top: 3%;">
				<?php
					require "connection.php";
					$id = $_SESSION["major_id"];
					$major = "SELECT `school_id`, `s_name`, `url`, `img`, `major_id` FROM `schools` WHERE major_id = '".$id."'";
					//echo $id;
					$list_of_majors = mysql_query($major);
					while ($list = mysql_fetch_assoc($list_of_majors)) {
						echo "
							<div class=\"col-md-3\">
								<div class=\"module\" style=\"background-image: url({$list['img']});\">
									<header>
										<h3>
											<a style=\"color:white\" href=\"{$list['url']}\" target=\" _blank\">{$list['s_name']}</a>
										</h3>
									</header>
								</div>
							</div>
						";
					}
				?>
		</div>
	</div>
</div>
<?php include('footer.php'); ?><br>


<!-- Modal -->
  <div class="modal fade" id="Ub" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#05774a;font-family: Bebas"><b>University of Buea</b></h4>
        </div>
        <div class="modal-body">
          <p><b>Website:</b> <a href="http://www.ubuea.cm/" target="_blank">http://www.ubuea.cm/</a><br>
          <b>Google Map:</b><br>
          <div style="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.3386250014482!2d9.289787314492806!3d4.153655796980056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39435ce3c348fb6!2sUniversity+of+Buea+Main+Campus+Entrance!5e0!3m2!1sen!2s!4v1469242657345" width="600" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
          </div><br><br>
          <a href="https://www.google.com/maps/place/University+of+Buea+Main+Campus+Entrance/@4.1536558,9.2897873,17z/data=!4m13!1m7!3m6!1s0x1061319236ca3443:0xbeb6c7b0ea934477!2sUniversity+Of+Buea!3b1!8m2!3d4.1536558!4d9.291976!3m4!1s0x0:0xb39435ce3c348fb6!8m2!3d4.1540588!4d9.2910433?hl=en" target="_blank" style="font-size: 17px">Open Map in new tab</a>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 

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

<!--Bootstrap Core JavaScript -->
<script type='text/javascript' src="js/bootstrap.min.js"></script>

</body>
</html>
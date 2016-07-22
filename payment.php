<?php
session_start();
require 'verify.php';
if ($_SESSION['status'] == 1) {
	header('location:home.php?status=your account is up-to date');
}
?>
<!DOCTYPE html>
<html lang="en">

<hea<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="orientation, academic, career, guide, focus, mentor, counsellor, personality, tips.">
    <meta name="description" content="Academic Career Orientation.">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Oryac">
    <link rel="icon" type="image/png" href="img/favicon2.png">

    <title>ORYAC | Payment...</title>

    <!-- Bootstrap Core CSS -->
    <link href="style.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
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

<meta name="generator" content="" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="page-top" style=" font-family:Times roboto">
  <div class="se-pre-con"></div>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php" style="color:#002530">ORYAC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" style="color:black" href="/about.php">ABOUT</a>
                    </li>
            
                    <li>
                        <a class="page-scroll" style="color:black" href="/services.php">SERVICES</a>
                    </li>

                    <li>
                        <a class="page-scroll" style="color:black" href="/team.php">TEAM</a>
                    </li>

                    <li>
                        <a class="page-scroll" style="color:black" href="/contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
       
    </nav>
    <div class="container">
    	<div class="row" style="margin-top: 12%">
        <div>
            <?php
                if (!empty($_GET['status'])) {
                           //echo $_GET['msg'];
                           echo  $_GET['status'];
                        }
            ?>
        </div>
        <a href="logout.php">Log out&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-log-out"></span></a>
    		<h2>ORYAC Payment</h2>
    		<div class="col-md-6 col-lg-6 col-sm-12">
    			<address>Hello <?php echo $_SESSION['lname']; ?>, ORYAC.ORG is free but a fee of 1,000 XAF is required to keep the site up and running.<br>We provide two means by which you can pay this fee either by MTN Mobile Money directly on our platform or by doing the transfer your way and send us the details of the payment using the form at the right side of the screen.</address>

    			<form class="form-group" action="">
    				<legend class="form-control"><b>MTN Mobile Money</b></legend>
    				<strong style="color:red">*</strong>An extra 10% of 1,000 XAF transaction fee is added which makes it 1,100 XAF
    				<label class="form-control" style="margin-bottom: 8%">
    					Your MTN phone number
    					<input class="form-control" type="number" placeholder="place your number here..." />
    					</label>
    				<label class="form-control">
    					PIN
    					<input class="form-control" type="password" placeholder="place your PIN number here..." />
    				</label>

    				<button class="btn btn-info btn-md active" style="margin-top: 10%" type="submit">Activate</button>

    			</form>
    		</div>
    		<div class="col-md-4 col-lg-4 col-sm-12">
    		<form style="margin-left: 5%" action="">
    			<h4>Other payment method<br>NB://Your Account will be activated in 24hrs</h4>
    			<textarea class="form-control" style="width: 100%;height: 250px; resize: none; margin:5%" placeholder="place payment info here, please include your email and phone number...Maximum of 500words"></textarea>
    			<button class="btn btn-info btn-md active" style="margin-left: 5%" type="submit">Activate</button>
    		</form>
    		</div>
    	</div>
    </div>
</body>
</html>
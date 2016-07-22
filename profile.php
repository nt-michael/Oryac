<?php
session_start();
    include('verify.php');
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
    
    <title>ORYAC | User profile...</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/ionicons-2.0.1/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons-2.0.1/css/ionicons.min.css">
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

    <div class="container">
    <?php include('navbar2.php'); ?> 
    <div style="text-align: right;padding-right: 14%;margin-top: 10%">
            <a href="home.php">Home&nbsp;<span style="color:black;font-size: 20px" class="glyphicon glyphicon-home"></span></a>&nbsp;
            <a href="logout.php">Log out&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-log-out"></span></a>
    </div>
        <div class="row" style="padding-left: 5%">
            <h2><strong>My Profile</strong></h2>
            <div style="padding-right: 20%">
            <?php include('line.php'); ?>
            </div>
        </div>
        <div class="row" style="">
            <div class="row">
            <div style="padding-left: 6%">
                <div class="col-md-5" style="text-align: left;border:1px solid black;height: auto;padding: 2%;border-radius: 2%">
                    <label>Update your settings...</label><br>
                    <form class="form-group" action="profile/full-update.php" method="POST">
                        <label class="form-group">First name:</label>
                        <input class="form-control" name="fname" type="text" value="<?php echo $_SESSION["fname"]; ?>" required>

                        <label class="form-group">Last name:</label>
                        <input class="form-control" name="lname" type="text" value="<?php echo $_SESSION["lname"]; ?>" required>

                        <label class="form-group">Email:</label>
                        <input class="form-control" name="email" type="email" value="<?php echo $_SESSION["email"]; ?>" required>

                        <label class="form-group">BirthDate:</label>
                        <input class="form-control" name="dob" type="date" value="<?php echo $_SESSION["dob"]; ?>" required>

                        <label class="form-group">Country:</label>
                        <input class="form-control" name="country" type="text" value="<?php echo $_SESSION["country"]; ?>" required>

                        <label class="form-group">Current Level:</label>
                        <input class="form-control" name="level" placeholder="form level" type="text" value="<?php echo $_SESSION["level"]; ?>" required>

                        <label class="form-group">Phone number:</label>
                        <input class="form-control" name="tel" placeholder="telephone1" type="number" value="<?php echo $_SESSION["tel"]; ?>" required>

                        <label class="form-group">Other number:</label>
                        <input class="form-control" name="tel2" placeholder="telephone2" type="number" value="<?php echo $_SESSION["tel2"]; ?>" required>

                        <label class="form-group">Current password:</label>
                        <input class="form-control" name="psw" placeholder="current password" type="text" value="<?php echo $_SESSION["psw"]; ?>" required>

                        <label class="form-group">New password:</label>
                        <input class="form-control" name="psw2" placeholder="new password" type="password" value="" required>

                        <div style="text-align: center"><br>
                            <input class="form-group btn btn-warning" type="submit" value="Update Settings">
                        </div>
                    </form>
                </div>
            </div>

                <div class="col-md-6" style="text-align:justify;padding-right: 12%;padding-left: 2%;">
                    <form class="form-group" action="profile/bg-info.php" method="POST">
                        <label class="form-group">Background Info: <small style="color:red">Maximum 500 word*</small></label>
                        <textarea class="form-control" name="bg-info" value="<?php echo $_SESSION["info"]; ?>" placeholder="Background Info" type="text" style="height: 200px;border:1px solid black; border-radius: 2%;resize: none"><?php echo $_SESSION["info"]; ?></textarea>
                        <br><input class="form-group btn btn-warning" type="submit" value="Save information">
                    </form><br><br>

                    <form style="text-align: right" class="form-group" action="#">
                        <label class="">View Past Test:</label>

                            <input class="form-group btn btn-warning" type="submit" value="Click here...">

                    </form><br/><br/><br/><br/><br/>

                    <form class="form-group" action="" style="border:1px solid black;padding: 2%; border-radius: 2%">
                        <legend>Update Just Password...</legend>
                        <label class="form-group">Current password:</label>
                        <input class="form-control" name="past-psw" placeholder="current password" type="text" value="<?php echo $_SESSION["psw"]; ?>">

                        <label class="form-group">New password:</label>
                        <input class="form-control" name="new-psw" placeholder="new password" type="password">

                        <div style="text-align: center"><br>
                            <input class="form-group btn btn-warning" type="submit" value="Update...">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>
</html>
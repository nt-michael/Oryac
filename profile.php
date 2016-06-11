
<!DOCTYPE html>
<html>
<head>
    <title>ORYAC | User profile...</title>
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
    <div style="text-align: right;padding-right: 14%;">
            <a href="home.php">Home&nbsp;<span style="color:black;font-size: 20px" class="glyphicon glyphicon-home"></span></a>&nbsp;
            <a href="profile.php">View profile&nbsp;<span style="font-size: 20px;color:black" class="glyphicon glyphicon-user"></span></a>&nbsp;
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
                    <form class="form-group" action="">
                        <label class="form-group">First name:</label>
                        <input class="form-control" name="fname" placeholder="firstname" type="text">

                        <label class="form-group">Last name:</label>
                        <input class="form-control" name="lname" placeholder="last name" type="text">

                        <label class="form-group">BirthDate:</label>
                        <input class="form-control" name="birth" placeholder="birthdate" type="date">

                        <label class="form-group">Current Level:</label>
                        <input class="form-control" name="level" placeholder="form level" type="text">

                        <label class="form-group">Phone number:</label>
                        <input class="form-control" name="tel1" placeholder="telephone1" type="number">

                        <label class="form-group">Other number:</label>
                        <input class="form-control" name="tel2" placeholder="telephone2" type="number">

                        <label class="form-group">Current password:</label>
                        <input class="form-control" name="past-psw" placeholder="current password" type="password">

                        <label class="form-group">New password:</label>
                        <input class="form-control" name="new-psw" placeholder="new password" type="password">

                        <div style="text-align: center"><br>
                            <input class="form-group btn btn-warning" type="submit" value="Update Settings">
                        </div>
                    </form>
                </div>
            </div>

                <div class="col-md-6" style="text-align:justify;padding-right: 12%;padding-left: 2%;">
                    <form class="form-group" action="">
                        <label class="form-group">Background Info:</label>
                        <textarea class="form-control" name="bg-info" placeholder="Background Info" type="text" style="height: 200px;border:1px solid black; border-radius: 2%;resize: none"></textarea>
                        <br><input class="form-group btn btn-warning" type="submit" value="Save information">
                    </form><br><br>

                    <form style="text-align: right" class="form-group" action="#">
                        <label class="">View Past Test:</label>

                            <input class="form-group btn btn-warning" type="submit" value="Click here...">

                    </form><br><br>

                    <form class="form-group" action="" style="border:1px solid black;padding: 2%; border-radius: 2%">
                        <legend>Update Just Password...</legend>
                        <label class="form-group">Current password:</label>
                        <input class="form-control" name="past-psw" placeholder="current password" type="password">

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
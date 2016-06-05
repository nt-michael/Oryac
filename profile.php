
<!DOCTYPE html>
<html>
<head>
    <title>ORYAC | About Us...</title>
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
    <div style="text-align: right;padding-right: 20%;">
            <a href="profile.php">Home&nbsp;<span style="font-size: 40px" class="glyphicon glyphicon-home"></span></a>
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
                <div class="col-md-5" style="text-align: left;border:1px solid black;height: auto;padding: 2%">
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

                <div class="col-md-6" style="text-align:justify;padding-right: 12%;padding-left: 2%">
                    <form class="form-group" action="">
                        <label class="form-group">Background Info:</label>
                        <textarea class="form-control" name="bg-info" placeholder="Background Info" type="text" style="height: 200px;border:1px solid black; resize: none"></textarea>
                        <br><input class="form-group btn btn-warning" type="submit" value="Save information">
                    </form><br><br>

                    <form style="text-align: right" class="form-group" action="#">
                        <label class="">View Past Test:</label>

                            <input class="form-group btn btn-warning" type="submit" value="Click here...">

                    </form><br><br>

                    <form class="form-group" action="" style="border:1px solid black;padding: 2%">
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
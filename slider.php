<!-- Full Page Image Background Carousel Header -->
<link rel="stylesheet" type="text/css" href="css/radio.css">
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators" style="text-align: center;color:black;">
           Copyright &copy; ORYAC <?php echo date ("Y"); ?>
           <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>\
            -->
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">

            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/good.jpg');"></div>
                <div class="carousel-caption" style="height: 80%;float: top;">
                    <h1><strong style="font-size:150%">ORYAC </strong></h1><h1><small style="color:#f5f5f5;"><strong>Academic Career Orientation Platform</strong></small></h1><br>
                    <strong style="font-size: 160%;color:lightblue">Join Us &amp; Get To Know Your Values &amp; Many More To Keep You Focused...</strong>
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/back-111.jpg');"></div>
                <div class="carousel-caption" style="height: 80%;float: top;">
                    <h1><strong>Give you a focus | Build up your mind</strong></h1>
                    <p style="font-size: 160%;color:black;">
                    Following the vocational theory by John Holland, the activities people engage in and the work environments in the society can be categorized by a set of common characteristics. <strong style="color:lightblue">Join Us &amp; Get To Know Your Values &amp; Many More...</strong>
                    </p>
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/back-112.jpg');"></div>
                <div class="carousel-caption" style="height: 80%;float: top;">
                <h1><strong>A Bright Future Awaits</strong></h1>
                <p style="font-size: 160%;color:black">
                    Following the vocational theory by John Holland, the activities people engage in and the work environments in the society can be categorized by a set of common characteristics. <strong style="color:lightblue">Join Us &amp; Get To Know Your Values &amp; Many More...</strong>
                    </p>
                
                </div>
            </div>

        <div class="red" style="height: auto">

                <div class="red-content">
                        <p style="font-size: 200%;margin-top: 20%"><span class="glyphicon glyphicon-lock"></span> ORYAC Login
                        </p>
                    <?php
                        if (!empty($_GET['msg'])) {
                           //echo $_GET['msg'];
                           echo  $_GET['msg'];
                        }
                    ?>
                    <div class="" style="padding:20px;">
                    
                        <form role="form" style="text-align: left" method="POST" action="login.php">
                            <div class="form-group">
                                <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                            </div>
                            <div class="checkbox">
                                <!-- <label><input type="checkbox" value="" checked>Remember me</label> -->
                            </div>
                       
                            <button type="submit" name="submit" class="btn btn-md btn-primary pull-left">Login&nbsp;<span class="glyphicon glyphicon-log-in"></span></button>
                        </form>
                        <p>Not a member yet? <a data-toggle="modal" href="#brief">Join Us</a></p>
                  </div>
                  
              </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class=""></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class=""></span>
        </a>

    </header>
<!-- Modal for Briefness -->
<div class="modal fade" id="brief" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><i class="glyphicon glyphicon-edit"></i>Steps To Follow</h4>
            </div>
            <div class="modal-body">
                You are required to take an Academic Career Test before you may have an account with us, for accurate and good results, kindly follow these steps:-<br/><br>
                <ul>
                <li>Here after you will have to take the test, and below is the format for which you will be required to answer each question point where-which you are suposed to just select eighter<br> one option of the following:-</li>
                <li><label for="r_starkeAblehnung" class="css-label">
                                A&nbsp;<input type="radio" id="r_starkeAblehnung" style="" value="4" name="q1" class="biggest" disabled="" checked="">&nbsp;&nbsp;

                            </label>
                            <label for="r_ablehnung" class="css-label">
                                B&nbsp;<input type="radio" id="r_ablehnung" value="3" name="q1" class="big" disabled="">&nbsp;&nbsp;

                            </label>
                            <label for="r_neutral" class="css-label">
                                C&nbsp;<input type="radio" id="r_neutral" value="2" name="q1" class="neutral" disabled="">&nbsp;&nbsp;

                            </label>
                            <label for="r_zustimmung" class="css-label">
                                D&nbsp;<input type="radio" id="r_zustimmung" value="1" name="q1" class="big" disabled="">&nbsp;&nbsp;

                            </label>
                            <label for="r_starkeZustimmung" class="css-label">
                                E&nbsp;<input type="radio" id="r_starkeZustimmung" value="0" name="q1" class="biggest" disabled="">&nbsp;&nbsp;

                            </label>

                    <ul>
                        <li>A: Strongly Agree</li>
                        <li>B: Agree</li>
                        <li>C: Not to sure</li>
                        <li>D: Disagree</li>
                        <li>E: Strongly Disagree</li>
                    </ul>
                </li>
                <li>
                    Please as you have seen the above pattern (A,B,C,D,E), it is the very pattern used in the test.
                </li>
                </ul>
            </div>
            <div class="modal-footer">
                All Done, <a href="test.php"><strong>Start</strong></a> the test <a href="test.php"><strong>Now</strong></a>
            </div>
        </div>
    </div>
</div>






    <!-- jQuery -->
    <script type='text/javascript' src="js/jquery.js"></script>

     <!--Bootstrap Core JavaScript -->
   <script type='text/javascript' src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script type='text/javascript' src="js/jquery.easing.min.js"></script>
   <script type='text/javascript' src="js/jquery.fittext.js"></script>
   <script type='text/javascript' src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
  <script type='text/javascript' src="js/creative.js"></script>
  <script type='text/javascript' src="js/cbpAnimatedHeader.js"></script>
  <script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
    </script>
    <!-- /.container -->
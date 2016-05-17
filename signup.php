<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FOUBS Sign-up | Get an account on FOUBS...</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>

<body style="font-family: times new roman; background-color:#F8F8F8">
<div class="container">
<nav class="navbar navbar-default" style="background-color:#337ab7">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:black" href="#"><strong>FOUBS</strong> <small>Academic personality test Result...</small></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
    </div>
  </div>
</nav>

  <div class="jumbotron">
    <h1>CONGRATULATIONS...</h1><br>
    <h2>Your Academic Personality Test (A.P.T) Result is out, and you are a(n):<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <mark><strong>
<?php

  #if(isset($_POST["q70"]) && isset($_POST["q71"]) && isset($_POST["q72"] ) && isset($_POST["q73"]) && isset($_POST["q74"])){
  $test12 = isset($_POST["q70"]) + isset($_POST["q71"]) + isset($_POST["q72"]) + isset($_POST["q73"]) + isset($_POST["q74"]);
  #echo $test12;
  #echo "<br/>";
  #echo $_SESSION["test11"];

  $test11 = $_SESSION["test11"];

  $test11_12 = $test12 + $test11;
  $_SESSION["test11_12"] = "$test11_12";
  
  #echo "<br/>";
  #echo $_SESSION["test11_12"];
#}
?>

<?php
  if(isset($_SESSION["test1_2"]) && isset($_SESSION["test3_4"]) && isset($_SESSION["test5_6"]) && isset($_SESSION["test7_8"]) && isset($_SESSION["test9_10"]) && isset($_SESSION["test11_12"]) ) {

  $r1 = $_SESSION["test1_2"];
  $r2 = $_SESSION["test3_4"];
  $r3 = $_SESSION["test5_6"];
  $r4 = $_SESSION["test7_8"];
  $r5 = $_SESSION["test9_10"];
  $r6 = $_SESSION["test11_12"]; 

  /*echo $r1;
  echo $r2;
  echo $r3;
  echo $r4;
  echo $r5;
  echo $r6;*/

  if(max($r1,$r2,$r3,$r4,$r5,$r6)==$r1){
    $r1_text = "REALISTIC - Doer";
    $_SESSION["r"] = $r1_text;
    echo $r1_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r2) {
    $r2_text = "INVESTIGATIVE - Thinkers";
    $_SESSION["r"] = $r2_text;
    echo $r2_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r3) {
    $r3_text = "ARTISTIC - Creators";
    $_SESSION["r"] = $r3_text;
    echo $r3_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r4) {
    $r4_text = "SOCIAL - Helpers";
    $_SESSION["r"] = $r4_text;
    echo $r4_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r5) {
    $r5_text = "INTREPRISING - Persuaders";
    $_SESSION["r"] = $r5_text;
    echo $r5_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r6) {
    $r6_text = "CONVENTIONAL - Organizers";
    $_SESSION["r"] = $r6_text;
    echo $r6_text;
  }
}
?></strong></mark></h2>      
    <p>Discover what's so special about your Academic Personality, lot of interesting things you should know about!<br><strong>What to do next ?</strong><br>Get an account to get started...</p>
  </div>

  <div class="row">
    <div class="col-md-4" style="text-align:justify">
    <legend><strong>Get A Premium Account</strong></legend>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <br>
      
      <button class="text-center btn-block btn-primary">Start&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
     
    </div>
    
    <div class="col-md-8 well">
      <ul class="nav nav-pills nav-stacked">
        <legend class="" style="color:#337ab7"><strong>SignUp</strong></legend>
        
        <form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
             <div class="form-group">
                <label for="name">email:</label>
                <input type="text" name="name" class="form-control" placeholder="your name here..." required>
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="email" name="email" class="form-control" placeholder="name@host.com" required>
            </div>

            <div class="form-group">
                <label for="tel">phone n<sup>o</sup>:</label>
                <input type="number" name="tel" class="form-control" placeholder="XXXXXXXXX" required>
            </div>

            <div class="form-group">
                <label for="test">Select your Academic Personality Test Result:</label>
                <select class="form-control" name="apt" placeholder="">
                  <option>---please choose from  beneath your APT Result Category---</option>
                  <option value="Realistic">REALISTIC <small>- Doer</small></option>
                  <option value="Investigative">INVESTIGATIVE <small>- Thinkers</small></option>
                  <option value="Artstic">ARTISTIC <small>- Creator</small></option>
                  <option value="Social">SOCIAL <small>- Helper</small></option>
                  <option value="Interprising">INTERPRISINNG <small>- Persuader</small></option>
                  <option value="Conventional">CONVENTIONAL <small>- Organiser</small></option>
                </select>
            </div>

            <div class="form-group">
               <label for="pwd">Password:</label>
               <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
            </div>

            <div class="form-group">
               <label for="pwd">Retype your Password:</label>
               <input type="password" class="form-control" id="pwd" placeholder="Confirm password" required>
            </div>

            <div class="form-group">
              <label for="policy">Agree to our <a href="#">Terms And Condition</a></label>
              <input type="checkbox" required>
            </div>

          <div class="">
          <input type="Submit" class="btn btn-primary pull-right" value="Create Account">
         </div>
        </form>
      </ul>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

</body>

</html>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
//session_destroy(); 
?>
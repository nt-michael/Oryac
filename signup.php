<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ORYAC Sign-up | Get an account on ORYAC...</title>
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
      <a class="navbar-brand" style="color:black" href="#"><strong>ORYAC</strong> <small>Academic personality test Result...</small></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
    </div>
  </div>
</nav>

  <div class="jumbotron">
    <h1>CONGRATULATIONS...</h1><br>
    <h2>Your Academic Personality Test (A.P.T) Result is out, and you have :<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <mark><strong>
<?php

  #if(isset($_POST["q70"]) && isset($_POST["q71"]) && isset($_POST["q72"] ) && isset($_POST["q73"]) && isset($_POST["q74"])){
  $test12_12 = isset($_POST["q67-67"]) + isset($_POST["q68-68"]) + isset($_POST["q69-69"]) + isset($_POST["q70-70"]) + isset($_POST["q71-71"]) + isset($_POST["q72-72"]);
  #echo $test12;
  #echo "<br/>";
  #echo $_SESSION["test11"];

  $test11_11 = $_SESSION["test11_11"];

  $test11_12 = $test12_12 + $test11_11;
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

  echo $r1."<br>";
  echo $r2."<br>";
  echo $r3."<br>";
  echo $r4."<br>";
  echo $r5."<br>";
  echo $r6."<br>";

  if(max($r1,$r2,$r3,$r4,$r5,$r6)==$r1){
    $r1_text = "A REALISTIC (Doer) A.P.T";
    $_SESSION["r"] = $r1_text;
    $_SESSION["try"] = "1";
    echo $r1_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r2) {
    $r2_text = "An INVESTIGATIVE (Thinker) A.P.T";
    $_SESSION["r"] = $r2_text;
    $_SESSION["try"] = "2";
    echo $r2_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r3) {
    $r3_text = "An ARTISTIC (Creator) A.P.T";
    $_SESSION["r"] = $r3_text;
    $_SESSION["try"] = "3";
    echo $r3_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r4) {
    $r4_text = "A SOCIAL (Helpers) A.P.T";
    $_SESSION["r"] = $r4_text;
    $_SESSION["try"] = "4";
    echo $r4_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r5) {
    $r5_text = "An INTREPRISING (Persuaders) A.P.T";
    $_SESSION["r"] = $r5_text;
    $_SESSION["try"] = "5";
    echo $r5_text;
  } elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r6) {
    $r6_text = "A CONVENTIONAL (Organizers) A.P.T";
    $_SESSION["r"] = $r6_text;
    $_SESSION["try"] = "6";
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
                <label for="name">name:</label>
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
                <label for="test">Your A.P.T:</label>
                <select class="form-control" name="apt" placeholder="">
                  <option value="<?php
                  if($_SESSION["try"] == "1"){
                        $r1_txt = "realistic";
                        echo $r1_txt;
                      } elseif ($_SESSION["try"] == "2") {
                        $r2_txt = "investigative";
                        echo $r2_txt;
                      } elseif ($_SESSION["try"] == "3") {
                        $r3_txt = "artistic";
                        echo $r3_txt;
                      } elseif ($_SESSION["try"] == "4") {
                        $r4_txt = "social";
                        echo $r4_txt;
                      } elseif ($_SESSION["try"] == "5") {
                        $r5_txt = "interprising";
                        echo $r5_txt;
                      } elseif ($_SESSION["try"] == "6") {
                        $r6_txt = "conventional";
                        echo $r6_txt;
                      }
                  ?>">
                  <?php
                  if($_SESSION["try"] == "1"){
                        $r1_txt = "REALISTIC";
                        $_SESSION["vx"] = $r1_txt;
                        echo $r1_txt;
                      } elseif ($_SESSION["try"] == "2") {
                        $r2_txt = "INVESTIGATIVE";
                        $_SESSION["vx"] = $r2_txt;
                        echo $r2_txt;
                      } elseif ($_SESSION["try"] == "3") {
                        $r3_txt = "ARTISTIC";
                        $_SESSION["vx"] = $r3_txt;
                        echo $r3_txt;
                      } elseif ($_SESSION["try"] == "4") {
                        $r4_txt = "SOCIAL";
                        $_SESSION["vx"] = $r4_txt;
                        echo $r4_txt;
                      } elseif ($_SESSION["try"] == "5") {
                        $r5_txt = "INTREPRISING";
                        $_SESSION["vx"] = $r5_txt;
                        echo $r5_txt;
                      } elseif ($_SESSION["try"] == "6") {
                        $r6_txt = "CONVENTIONAL";
                        $_SESSION["vx"] = $r6_txt;
                        echo $r6_txt;
                      }
                  ?>
                  </option>
                </select>
            </div>

            <div class="form-group">
               <label for="pwd">password:</label>
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
//session_unset(); 

// destroy the session 
//session_destroy(); 
?>
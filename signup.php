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

</head>

<body style="font-family: times new roman; background-color:#F8F8F8;padding-bottom: 5%">
  <div class="se-pre-con"></div>
<div class="container">
<nav class="navbar navbar-default" style="background-color:#337ab7">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:black"><strong>ORYAC</strong> <small>Academic Career personality test Result...</small></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
    </div>
  </div>
</nav>

  <div class="jumbotron">
    <h1>CONGRATULATIONS...</h1><br>
    <h2>Your Academic Career Personality Test (A.C.P.T) Result is out, and you have :<br/>&nbsp;&nbsp;
<?php

  #if(isset($_POST["q70"]) && isset($_POST["q71"]) && isset($_POST["q72"] ) && isset($_POST["q73"]) && isset($_POST["q74"])){
  $t12_12 = array( $_POST["q67-67"], $_POST["q68-68"], $_POST["q69-69"], $_POST["q70-70"], $_POST["q71-71"], $_POST["q72-72"] );
  $test12_12 = array_sum($t12_12);
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
 // if( isset($_SESSION["test1_2"]) && isset($_SESSION["test3_4"]) && isset($_SESSION["test5_6"]) && isset($_SESSION["test7_8"]) && isset($_SESSION["test9_10"]) && isset($_SESSION["test11_12"]) ) {

  $r1 = $_SESSION["test1_2"];
  $r2 = $_SESSION["test3_4"];
  $r3 = $_SESSION["test5_6"];
  $r4 = $_SESSION["test7_8"];
  $r5 = $_SESSION["test9_10"];
  $r6 = $_SESSION["test11_12"]; 
/*
  echo $r1."<br>";
  echo $r2."<br>";
  echo $r3."<br>";
  echo $r4."<br>";
  echo $r5."<br>";
  echo $r6."<br>";
*/
  if(max($r1,$r2,$r3,$r4,$r5,$r6)==$r1){
    $r1_text = "A Realistic (Doer) A.P.T";
    /* Get Second and Third Highest */
    if (max($r2,$r3,$r4,$r5,$r6)==$r2) {
      $r1r2_text = "I";

      if (max($r3,$r4,$r5,$r6)==$r3) {
        $r1r2r3_text = "(RIA)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r2r3_text; 
         /*-----Still on first APT-----------*/
             
      }elseif (max($r4,$r5,$r6)==$r4) {
        $r1r2r4_text = "(RIS)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r2r4_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r5,$r6)==$r5) {
        $r1r2r5_text = "(RIE)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r2r5_text; 
         /*-----Still on first APT-----------*/

      }else {
        $r1r2r6_text = "(RIC)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r2r6_text; 
         /*-----Still on first APT-----------*/

      }
    }elseif (max($r3,$r4,$r5,$r6)==$r3) {
      $r1r3_text = "A";

      if (max($r2,$r4,$r5,$r6)==$r4) {
        $r1r3r4_text == "(RAS)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r3r4_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r2,$r5,$r6)==$r2) {
      $r1r3r2_text == "(RAI)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r3r2_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r5,$r6)==$r5) {
      $r1r3r5_text == "(RAE)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r3r5_text; 
         /*-----Still on first APT-----------*/
      }else {
      $r1r3r6_text == "(RAC) A.P.T";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r3r6_text; 
         /*-----Still on first APT-----------*/
      }
    }elseif (max($r4,$r5,$r6)==$r4) {
      $r1r4_text = "S";

      if (max($r2,$r3,$r5,$r6)==$r2) {
        $r1r4r2_text = "(RSI)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r4r2_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r3,$r5,$r6)==$r3) {
        $r1r4r3_text = "(RSA)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r4r3_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r5,$r6)==$r5) {
        $r1r4r5_text = "(RSE)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r4r5_text; 
         /*-----Still on first APT-----------*/

      }else {
        $r1r4r6_text = "(RSC)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r4r6_text; 
         /*-----Still on first APT-----------*/

      }
    }elseif (max($r5,$r6)==$r5) {
      $r1r5_text = "E";

      if (max($r2,$r3,$r4,$r6)==$r2) {
        $r1r5r2_text = "(REI)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r5r2_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r3,$r4,$r6)==$r3) {
        $r1r5r3_text = "(REA)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r5r3_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r4,$r6)==$r4) {
        $r1r5r4_text = "(RES)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r5r4_text; 
         /*-----Still on first APT-----------*/

      }else {
        $r1r5r6_text = "(REC)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r5r6_text; 
         /*-----Still on first APT-----------*/

      }
    }else {
      $r1r6 = "C";
      if(max($r2,$r3,$r4,$r5)==$r2) {
        $r1r6r2_text = "(RCI)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r6r2_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r3,$r4,$r5)==$r3) {
        $r1r6r3_text = "(RCA)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r6r3_text; 
         /*-----Still on first APT-----------*/

      }elseif (max($r4,$r5)==$r4) {
        $r1r6r4_text = "(RCS)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r6r4_text; 
         /*-----Still on first APT-----------*/

      }else {
        $r1r6r5_text = "(RCE)";
            $_SESSION["r"] = $r1_text;
            $_SESSION["try"] = "1";
            echo $r1_text." - ".$r1r6r5_text; 
         /*-----First APT Ends Here-----------*/

      }
    }
/*--------------Second APT Starts Here------------------*/

  } elseif (max($r2,$r3,$r4,$r5,$r6)==$r2) {
    $r2_text = "An INVESTIGATIVE (Thinker) A.P.T";

    if (max($r1,$r3,$r4,$r5,$r6)==$r1) {
      $r2r1_text = "R";
      if (max($r3,$r4,$r5,$r6)==$r3) {
        $r2r1r3_text = "(IRA)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r1r3_text; 
         /*-----Second APT Continuous Here-----------*/

      }elseif (max($r4,$r5,$r6)==$r4) {
        $r2r1r4_text = "(IRS)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r1r4_text; 
         /*-----Second APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r5) {
        $r2r1r5_text = "(IRE)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r1r5_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }else {
        $r2r1r6_text = "(IRC)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r1r6_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }
    }elseif (max($r3,$r4,$r5,$r6)==$r3) {
      $r2r3_text = "A";
      if (max($r1,$r4,$r5,$r6)==$r4) {
        $r2r3r4_text == "(IAS)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r3r4_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }elseif (max($r1,$r5,$r6)==$r1) {
      $r2r3r1_text == "(IAR)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r3r1_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }elseif (max($r5,$r6)==$r5) {
      $r2r3r5_text == "(IAE)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r3r5_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }else {
      $r2r3r6_text == "(IAC)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r3r6_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }
    }elseif (max($r4,$r5,$r6)==$r4) {
      $r2r4_text = "S";
      if (max($r1,$r3,$r5,$r6)==$r1) {
        $r2r4r1_text = "(ISR)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r4r1_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }elseif (max($r3,$r5,$r6)==$r3) {
        $r2r4r3_text = "(ISA)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r4r3_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }elseif (max($r5,$r6)==$r5) {
        $r2r4r5_text = "(ISE)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r4r5_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }else {
        $r2r4r6_text = "(ISC)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r4r6_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }
    }elseif (max($r5,$r6)==$r5) {
      $r2r5_text = "E";
      if (max($r1,$r3,$r4,$r6)==$r1) {
        $r2r5r1_text = "(IER)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r5r1_text; 
         /*-----Second APT Continuous Here-----------*/
         
      }elseif (max($r3,$r4,$r6)==$r3) {
        $r2r5r3_text = "(IEA)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r5r3_text; 
         /*-----Second APT Continuous Here-----------*/

      }elseif (max($r4,$r6)==$r4) {
        $r2r5r4_text = "(IES)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r5r4_text; 
         /*-----Second APT Continuous Here-----------*/

      }else {
        $r2r5r6_text = "(IEC)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r5r6_text; 
         /*-----Second APT Continuous Here-----------*/

      }
    }else {
      $r2r6 = "C";
      if(max($r1,$r3,$r4,$r5)==$r1) {
        $r2r6r1_text = "(ICR)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r6r1_text; 
         /*-----Second APT Continuous Here-----------*/

      }elseif (max($r3,$r4,$r5)==$r3) {
        $r2r6r3_text = "(ICA)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r6r3_text; 
         /*-----Second APT Continuous Here-----------*/

      }elseif (max($r4,$r5)==$r4) {
        $r2r6r4_text = "(ICS)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r6r4_text; 
         /*-----Second APT Ends Here-----------*/

      }else {
        $r2r6r5_text = "(ICE)";
            $_SESSION["r"] = $r2_text;
            $_SESSION["try"] = "2";
            echo $r2_text." - ".$r2r6r5_text; 
         /*-----Second APT Ends Here-----------*/

      }
    }
/*---------------Third APT Starts Here----------------------*/
  } elseif (max($r3,$r4,$r5,$r6)==$r3) {
    $r3_text = "An ARTISTIC (Creator) A.P.T";

    if (max($r1,$r2,$r4,$r5,$r6)==$r1) {
      $r3r1_text = "R";
      if (max($r2,$r4,$r5,$r6)==$r2) {
        $r3r1r2_text = "(ARI)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "2";
            echo $r3_text." - ".$r3r1r2_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r4,$r5,$r6)==$r4) {
        $r3r1r4_text = "(ARS)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r1r4_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r5) {
        $r3r1r5_text = "(ARE)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r1r5_text; 
         /*-----Third APT Continuous Here-----------*/

      }else {
        $r3r1r6_text = "(ARC)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r1r6_text; 
         /*-----Third APT Continuous Here-----------*/

      }
    }elseif (max($r2,$r4,$r5,$r6)==$r2) {

      $r3r2_text = "I";
      if (max($r1,$r4,$r5,$r6)==$r4) {
        $r3r2r4_text == "(AIS)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r2r4_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r1,$r5,$r6)==$r1) {
      $r3r2r1_text == "(AIR)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r2r1_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r5) {
      $r3r2r5_text == "(AIE)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r2r5_text; 
         /*-----Third APT Continuous Here-----------*/

      }else {
      $r3r2r6_text == "(AIC)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r2r6_text; 
         /*-----Third APT Continuous Here-----------*/

      }
    }elseif (max($r4,$r5,$r6)==$r4) {
      $r3r4_text = "S";

      if (max($r1,$r2,$r5,$r6)==$r1) {
        $r3r4r1_text = "(ASR)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r4r1_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r2,$r5,$r6)==$r2) {
        $r3r4r2_text = "(ASI)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r4r2_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r5) {
        $r3r4r5_text = "(ASE)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r4r5_text; 
         /*-----Third APT Continuous Here-----------*/

      }else {
        $r3r4r6_text = "(ASC)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r4r6_text; 
         /*-----Third APT Continuous Here-----------*/

      }
    }elseif (max($r5,$r6)==$r5) {
      $r3r5_text = "E";

      if (max($r1,$r2,$r4,$r6)==$r1) {
        $r3r5r1 = "(AER)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r5r1_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r2,$r4,$r6)==$r2) {
        $r3r5r2 = "(AEI)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r5r2_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r4,$r6)==$r4) {
        $r3r5r4_text = "(AES)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r5r4_text; 
         /*-----Third APT Continuous Here-----------*/

      }else {
        $r3r5r6_text = "(AEC)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r5r6_text; 
         /*-----Third APT Continuous Here-----------*/

      }
    }else {
      $r3r6 = "C";

      if(max($r1,$r2,$r4,$r5)==$r1) {
        $r3r6r1_text = "(ACR)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r6r1_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r2,$r4,$r5)==$r2) {
        $r3r6r2_text = "(ACI)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r6r2_text; 
         /*-----Third APT Continuous Here-----------*/

      }elseif (max($r4,$r5)==$r4) {
        $r3r6r4_text = "(ACS)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r6r4_text; 
         /*-----Third APT Continuous Here-----------*/

      }else {
        $r3r6r5_text = "(ACE)";
            $_SESSION["r"] = $r3_text;
            $_SESSION["try"] = "3";
            echo $r3_text." - ".$r3r6r5_text; 
         /*-----Third APT Ends Here-----------*/

      }
    }
/*---------------Fourth APT Starts Here-------------*/
  } elseif (max($r4,$r5,$r6)==$r4) {
    $r4_text = "A SOCIAL (Helper) A.P.T";

/*  TO BE CONTINUED   */
    if (max($r1,$r2,$r3,$r5,$r6)==$r1) {
      $r4r1_text = "R";

      if (max($r2,$r3,$r5,$r6)==$r2) {
        $r4r1r2_text = "(SRI)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r1r2_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r3,$r5,$r6)==$r3) {
        $r4r1r3_text = "(SRA)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r1r3_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r5) {
        $r4r1r5_text = "(SRE)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r1r5_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }else {
        $r2r1r6_text = "(SRC)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r1r6_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }
    }elseif (max($r2,$r3,$r5,$r6)==$r2) {
      $r4r2_text = "I";

      if (max($r1,$r3,$r5,$r6)==$r1) {
        $r4r2r1_text == "(SIR)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r2r1_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r3,$r5,$r6)==$r3) {
      $r4r2r3_text == "(SIA)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r2r3_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r5) {
      $r4r2r5_text == "(SIE)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r2r5_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }else {
      $r4r2r6_text == "(SIC)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r2r6_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }
    }elseif (max($r3,$r5,$r6)==$r3) {
      $r4r3_text = "A";

      if (max($r1,$r2,$r5,$r6)==$r1) {
        $r4r3r1_text = "(SAR)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r3r1_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r3,$r5,$r6)==$r3) {
        $r4r3r2_text = "(SAI)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r3r2_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r5) {
        $r4r3r5_text = "(SAE)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r3r5_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }else {
        $r4r3r6_text = "(SAC)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r3r6_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }
    }elseif (max($r5,$r6)==$r5) {
      $r4r5_text = "E";

      if (max($r1,$r2,$r3,$r6)==$r1) {
        $r4r5r1_text = "(SER)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r5r1_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r3,$r2,$r6)==$r2) {
        $r4r5r2_text = "(SEI)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r5r2_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r3,$r6)==$r3) {
        $r4r5r3_text = "(SEA)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r5r3_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }else {
        $r4r5r6_text = "(SEC)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r5r6_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }
    }else {
      $r4r6_text = "C";

      if(max($r1,$r2,$r3,$r5)==$r1) {
        $r4r6r1_text = "(SCR)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r6r1_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r3,$r2,$r5)==$r2) {
        $r4r6r2_text = "(SCI)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r6r2_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }elseif (max($r3,$r5)==$r3) {
        $r4r6r3_text = "(SCA)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r6r3_text; 
         /*-----Fourth APT Continuous Here-----------*/

      }else {
        $r4r6r5_text = "(SCE)";
            $_SESSION["r"] = $r4_text;
            $_SESSION["try"] = "4";
            echo $r4_text." - ".$r4r6r5_text; 
         /*-----Fourth APT Ends Here-----------*/

      }
    }
/*---------------Fifth APT Starts Here----------------*/
  } elseif (max($r5,$r6)==$r5) {
    $r5_text = "An ENTREPRISING (Persuader) A.P.T";

    if (max($r1,$r2,$r3,$r4,$r6)==$r1) {
      $r5r1_text = "R";

      if (max($r2,$r3,$r4,$r6)==$r2) {
        $r5r1r2_text = "(ERI)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r1r2_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r3,$r5,$r6)==$r3) {
        $r5r1r3_text = "(ERA)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r1r3_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r4) {
        $r5r1r4_text = "(ERS)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r4_text." - ".$r5r1r4_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }else {
        $r5r1r6_text = "(ERC)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r1r6_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }/* Continue */
    }elseif (max($r2,$r3,$r4,$r6)==$r2) {
      $r5r2_text = "I";
      if (max($r1,$r3,$r4,$r6)==$r1) {
        $r5r2r1_text == "(EIR)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r2r1_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r3,$r4,$r6)==$r3) {
      $r5r2r3_text == "(EIA)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r2r3_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r4,$r6)==$r5) {
      $r5r2r4_text == "(EIS)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r2r4_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }else {
      $r5r2r6_text == "(EIC)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r2r6_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }
    }elseif (max($r3,$r4,$r6)==$r3) {
      $r5r3_text = "A";
      if (max($r1,$r2,$r4,$r6)==$r1) {
        $r5r3r1_text = "(EAR)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r3r1_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r3,$r5,$r6)==$r3) {
        $r5r3r2_text = "(EAI)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r3r2_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r5,$r6)==$r5) {
        $r5r3r4_text = "(EAI)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r3r4_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }else {
        $r5r3r6_text = "(EAC)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r3r6_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }
    }elseif (max($r4,$r6)==$r4) {
      $r5r4_text = "S";

      if (max($r1,$r2,$r3,$r6)==$r1) {
        $r5r4r1_text = "(ESR";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r4r1_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r3,$r2,$r6)==$r2) {
        $r5r4r2_text = "(ESI)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r4r2_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r3,$r6)==$r3) {
        $r5r4r3_text = "(ESA)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r4r3_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }else {
        $r5r4r6_text = "(ESC)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r4r6_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }
    }else {
      $r5r6_text = "C";

      if(max($r1,$r2,$r3,$r4)==$r1) {
        $r5r6r1_text = "(ECR)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r6r1_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r3,$r2,$r5)==$r2) {
        $r5r6r2_text = "(ECI)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r6r2_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }elseif (max($r3,$r4)==$r3) {
        $r5r6r3_text = "(ECA)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r6r3_text; 
         /*-----Fifth APT Continuous Here-----------*/

      }else {
        $r5r6r4_text = "(ECS)";
            $_SESSION["r"] = $r5_text;
            $_SESSION["try"] = "5";
            echo $r5_text." - ".$r5r6r4_text; 
         /*-----Fifth APT Ends Here-----------*/

      }
    }
/*--------------------Sixth APT Starts Here---------*/
  } else {
    $r6_text = "A CONVENTIONAL (Organizers) A.P.T";

      if (max($r1,$r2,$r3,$r4,$r5)==$r1) {
      $r6r1_text = "R";
      if (max($r2,$r3,$r4,$r5)==$r2) {
        $r6r1r2_text = "(CRI)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r1r2_text; 

      }elseif (max($r3,$r4,$r5)==$r3) {
        $r6r1r3_text = "(CRA)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r1r3_text; 

      }elseif (max($r4,$r5)==$r4) {
        $r6r1r4_text = "(CRS)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r1r4_text; 

      }else {
        $r6r1r5_text = "(CRE)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r1r5_text; 

      }/* Continue */
    }elseif (max($r2,$r3,$r4,$r5)==$r2) {
      $r6r2_text = "I";
      if (max($r1,$r3,$r4,$r5)==$r1) {
        $r6r2r1_text == "(CIR)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r2r1_text; 

      }elseif (max($r3,$r4,$r5)==$r3) {
      $r6r2r3_text == "(CIA)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r2r3_text; 

      }elseif (max($r4,$r5)==$r4) {
      $r6r2r4_text == "(CIS)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r2r4_text; 

      }else {
      $r6r2r5_text == "(CIE)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r2r5_text; 

      }
    }elseif (max($r3,$r4,$r5)==$r3) {
      $r6r3_text = "A";
      if (max($r1,$r2,$r4,$r5)==$r1) {
        $r6r3r1_text = "(CAR)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r3r1_text; 

      }elseif (max($r3,$r4,$r5)==$r3) {
        $r6r3r2_text = "(CAI)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r3r2_text; 

      }elseif (max($r4,$r5)==$r5) {
        $r6r3r4_text = "(CAS)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r3r4_text; 

      }else {
        $r6r3r5_text = "(CAE)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r3r5_text; 

      }

    }elseif (max($r4,$r5)==$r4) {
      $r6r4_text = "S";

      if (max($r1,$r2,$r3,$r5)==$r1) {
        $r6r4r1_text = "(CSR)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r4r1_text; 

      }elseif (max($r3,$r2,$r5)==$r2) {
        $r6r4r2_text = "(CSI)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r4r2_text; 

      }elseif (max($r3,$r5)==$r3) {
        $r6r4r3_text = "(CSA)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r4r3_text; 

      }else {
        $r6r4r5_text = "(CSE)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r4r5_text; 

      }
    }else {
      $r6r5_text = "E";
      if(max($r1,$r2,$r3,$r4)==$r1) {
        $r6r5r1_text = "(CER)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r5r1_text; 

      }elseif (max($r3,$r2,$r4)==$r2) {
        $r6r5r2_text = "(CEI)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r5r2_text; 

      }elseif (max($r3,$r4)==$r3) {
        $r6r5r3_text = "(CEA)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r5r3_text; 

      }else {
        $r6r5r4_text = "(CES)";
            $_SESSION["r"] = $r6_text;
            $_SESSION["try"] = "6";
            echo $r6_text." - ".$r6r5r4_text; 

      }
    }

  }
//}

?></strong></mark></h2>      
    <p>Discover what's so special about your Academic Career Personality, lot of interesting things you should know about!<br><strong>What to do next ?</strong><br>Get an account to get started...</p>
  </div>

  <div class="row">
    <div class="col-md-4" style="text-align:justify">
    <legend><strong>Get An Account</strong></legend>
      <p>Thank you for completing the first step to discovering your destiny. Register Now and get an account to know more about your academic personality and opportunities open to you.</p>
      <br>
      
      <button class="text-center btn-block btn-primary">Start&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
     
    </div>
    
    <div class="col-md-8 well">
      <ul class="nav nav-pills nav-stacked">
        <legend class="" style="color:#337ab7"><strong>SignUp</strong></legend>
        
        <form role="form" action="register.php" method="POST">
            <div class="form-group col-md-6">
                <label for="name">First name:</label>
                <input type="text" name="fname" class="form-control" placeholder="your name here..." required>
            </div>

            <div class="form-group col-md-6">
                <label for="name">Last name:</label>
                <input type="text" name="lname" class="form-control" placeholder="your name here..." required>
            </div>

            <div class="form-group col-md-12">
                <label for="email">email:</label>
                <input type="email" name="email" class="form-control" placeholder="name@host.com" required>
            </div>

            <div class="form-group col-md-12">
                <label for="tel">phone n<sup>o</sup>:</label>
                <input type="number" name="tel" class="form-control" placeholder="XXXXXXXXX" required>
            </div>

            <div class="form-group col-md-6">
                <label for="name">Date of birth:</label>
                <input type="date" name="dob" class="form-control" placeholder="your name here..." required>
            </div>

            <div class="form-group col-md-6">
                <label for="name">Country:</label>
                <input type="text" name="country" class="form-control" placeholder="your name here..." required>
            </div>

            <div class="form-group col-md-12">
                <label for="test">Your A.P.T:</label>
                <select class="form-control" name="apt" placeholder="">
                  <option value="<?php
                  if($_SESSION["try"] == "1"){
                        $r1_txt = "Realistic";
                        echo $r1_txt;
                      } elseif ($_SESSION["try"] == "2") {
                        $r2_txt = "Investigative";
                        echo $r2_txt;
                      } elseif ($_SESSION["try"] == "3") {
                        $r3_txt = "Artistic";
                        echo $r3_txt;
                      } elseif ($_SESSION["try"] == "4") {
                        $r4_txt = "Social";
                        echo $r4_txt;
                      } elseif ($_SESSION["try"] == "5") {
                        $r5_txt = "Enterprising";
                        echo $r5_txt;
                      } elseif ($_SESSION["try"] == "6") {
                        $r6_txt = "Conventional";
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
                        $r5_txt = "ENTREPRISING";
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

            <div class="form-group col-md-6">
               <label for="pwd">password:</label>
               <input type="password" name="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" maxlength="50" required>
            </div>

            <div class="form-group col-md-6">
               <label for="pwd">Retype your Password:</label>
               <input type="password" onfocusout="check();" name="cpassword" class="form-control" id="pwd2" placeholder="Confirm password" maxlength="50" required>
            </div>

            <div class="form-group col-md-12">
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
<div id="error"></div>

<script type="text/javascript">
  function check(){
    var psw = document.getElementById("pwd").value;
    var psw2 = document.getElementById("pwd2").value;
    var max = 49;
    var success = "Password Matches";
    var er = "Password didn't match";
   /* for (var i = 0; i = max; i++) {
      if (psw[i] == psw2[i] ) {
       // document.getElementById("error").innerHTML = er;
      }
      else
      document.getElementById("error").innerHTML = er;
    }
  }*/
</script>

</body>

</html>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
//session_destroy(); 
?>
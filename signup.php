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
      $r1r2_text = "An Investigative (Thinker) A.P.T";
      if (max($r3,$r4,$r5,$r6)==$r3) {
        $r1r2r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r4,$r5,$r6)==$r4) {
        $r1r2r4_text = "A Social (Helper) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r1r2r5_text = "An Intreprising (Persuader) A.P.T";
      }else {
        $r1r2r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r3,$r4,$r5,$r6)==$r3) {
      $r1r3_text = "An Artistic (Creator) A.P.T";
      if (max($r2,$r4,$r5,$r6)==$r4) {
        $r1r3r4_text == "A Social (Helper) A.P.T";
      }elseif (max($r2,$r5,$r6)==$r2) {
      $r1r3r2_text == "An Investigative (Thinker) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
      $r1r3r5_text == "An Intreprising (Persuader) A.P.T";
      }else {
      $r1r3r6_text == "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r4,$r5,$r6)==$r4) {
      $r1r4_text = "A Social (Helper) A.P.T";
      if (max($r2,$r3,$r5,$r6)==$r2) {
        $r1r4r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r5,$r6)==$r3) {
        $r1r4r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r1r4r5_text = "An Interesting (Persuader) A.P.T";
      }else {
        $r1r4r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r5,$r6)==$r5) {
      $r1r5_text = "An Intreprising (Persuader) A.P.T";
      if (max($r2,$r3,$r4,$r6)==$r2) {
        $r1r5r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r4,$r6)==$r3) {
        $r1r5r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r4,$r6)==$r4) {
        $r1r5r4_text = "A Social (Helper) A.p.t";
      }else {
        $r1r5r6_text = "A Conventional (Organizer) A.P.T";
      }
    }else {
      $r1r6 = "A Conventional (Organizer) A.P.T";
      if(max($r2,$r3,$r4,$r5)==$r2) {
        $r1r6r2_text = "An Investigative (Thinker) A.P.t";
      }elseif (max($r3,$r4,$r5)==$r3) {
        $r1r6r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r4,$r5)==$r4) {
        $r1r6r4_text = "A Social (Helper) A.P.T";
      }else {
        $r1r6r5_text = "An Intreprising (Persuader) A.P.T";
      }
    }
    $_SESSION["r"] = $r1_text;
    $_SESSION["try"] = "1";
    echo $r1_text;
  } elseif (max($r2,$r3,$r4,$r5,$r6)==$r2) {
    $r2_text = "An INVESTIGATIVE (Thinker) A.P.T";

    if (max($r1,$r3,$r4,$r5,$r6)==$r1) {
      $r2r1_text = "A Realistic (Doer) A.P.T";
      if (max($r3,$r4,$r5,$r6)==$r3) {
        $r2r1r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r4,$r5,$r6)==$r4) {
        $r2r1r4_text = "A Social (Helper) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r2r1r5_text = "An Intreprising (Persuader) A.P.T";
      }else {
        $r2r1r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r3,$r4,$r5,$r6)==$r3) {
      $r2r3_text = "An Artistic (Creator) A.P.T";
      if (max($r1,$r4,$r5,$r6)==$r4) {
        $r2r3r4_text == "A Social (Helper) A.P.T";
      }elseif (max($r1,$r5,$r6)==$r1) {
      $r2r3r1_text == "A Realistic (Doer) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
      $r2r3r5_text == "An Intreprising (Persuader) A.P.T";
      }else {
      $r2r3r6_text == "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r4,$r5,$r6)==$r4) {
      $r2r4_text = "A Social (Helper) A.P.T";
      if (max($r1,$r3,$r5,$r6)==$r1) {
        $r2r4r1_text = "An Realistic (Doer) A.P.T";
      }elseif (max($r3,$r5,$r6)==$r3) {
        $r2r4r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r2r4r5_text = "An Interesting (Persuader) A.P.T";
      }else {
        $r2r4r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r5,$r6)==$r5) {
      $r2r5_text = "An Intreprising (Persuader) A.P.T";
      if (max($r1,$r3,$r4,$r6)==$r1) {
        $r2r5r1_text = "An Realistic (Doer) A.P.T";
      }elseif (max($r3,$r4,$r6)==$r3) {
        $r2r5r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r4,$r6)==$r4) {
        $r2r5r4_text = "A Social (Helper) A.p.t";
      }else {
        $r2r5r6_text = "A Conventional (Organizer) A.P.T";
      }
    }else {
      $r2r6 = "A Conventional (Organizer) A.P.T";
      if(max($r1,$r3,$r4,$r5)==$r1) {
        $r1r6r2_text = "A Realistic (Doer) A.P.t";
      }elseif (max($r3,$r4,$r5)==$r3) {
        $r2r6r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r4,$r5)==$r4) {
        $r2r6r4_text = "A Social (Helper) A.P.T";
      }else {
        $r2r6r5_text = "An Intreprising (Persuader) A.P.T";
      }
    }
    $_SESSION["r"] = $r2_text;
    $_SESSION["try"] = "2";
    echo $r2_text;
  } elseif (max($r3,$r4,$r5,$r6)==$r3) {
    $r3_text = "An ARTISTIC (Creator) A.P.T";

    if (max($r1,$r2,$r4,$r5,$r6)==$r1) {
      $r3r1_text = "A Realistic (Doer) A.P.T";
      if (max($r2,$r4,$r5,$r6)==$r2) {
        $r3r1r3_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r4,$r5,$r6)==$r4) {
        $r3r1r4_text = "A Social (Helper) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r3r1r5_text = "An Intreprising (Persuader) A.P.T";
      }else {
        $r3r1r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r2,$r4,$r5,$r6)==$r2) {
      $r3r2_text = "An Investigative (Thinker) A.P.T";
      if (max($r1,$r4,$r5,$r6)==$r4) {
        $r3r2r4_text == "A Social (Helper) A.P.T";
      }elseif (max($r1,$r5,$r6)==$r1) {
      $r2r3r1_text == "A Realistic (Doer) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
      $r3r2r5_text == "An Intreprising (Persuader) A.P.T";
      }else {
      $r3r2r6_text == "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r4,$r5,$r6)==$r4) {
      $r3r4_text = "A Social (Helper) A.P.T";
      if (max($r1,$r2,$r5,$r6)==$r1) {
        $r3r4r1_text = "An Realistic (Doer) A.P.T";
      }elseif (max($r2,$r5,$r6)==$r2) {
        $r3r4r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r3r4r5_text = "An Interesting (Persuader) A.P.T";
      }else {
        $r3r4r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r5,$r6)==$r5) {
      $r3r5_text = "An Intreprising (Persuader) A.P.T";
      if (max($r1,$r2,$r4,$r6)==$r1) {
        $r3r5r1 = "An Realistic (Doer) A.P.T";
      }elseif (max($r2,$r4,$r6)==$r2) {
        $r3r5r2 = "An Investigative (Thinker) A.P.T";
      }elseif (max($r4,$r6)==$r4) {
        $r3r5r4_text = "A Social (Helper) A.p.t";
      }else {
        $r3r5r6_text = "A Conventional (Organizer) A.P.T";
      }
    }else {
      $r3r6 = "A Conventional (Organizer) A.P.T";
      if(max($r1,$r2,$r4,$r5)==$r1) {
        $r3r6r1_text = "A Realistic (Doer) A.P.t";
      }elseif (max($r2,$r4,$r5)==$r2) {
        $r3r6r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r4,$r5)==$r4) {
        $r3r6r4_text = "A Social (Helper) A.P.T";
      }else {
        $r3r6r5_text = "An Intreprising (Persuader) A.P.T";
      }
    }
    $_SESSION["r"] = $r3_text;
    $_SESSION["try"] = "3";
    echo $r3_text;
  } elseif (max($r4,$r5,$r6)==$r4) {
    $r4_text = "A SOCIAL (Helper) A.P.T";

/*  TO BE CONTINUED   */
    if (max($r1,$r2,$r3,$r5,$r6)==$r1) {
      $r4r1_text = "A Realistic (Doer) A.P.T";
      if (max($r2,$r3,$r5,$r6)==$r2) {
        $r4r1r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r5,$r6)==$r3) {
        $r4r1r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r4r1r5_text = "An Intreprising (Persuader) A.P.T";
      }else {
        $r2r1r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r2,$r3,$r5,$r6)==$r2) {
      $r4r2_text = "An Investigative (Thinker) A.P.T";
      if (max($r1,$r3,$r5,$r6)==$r1) {
        $r4r2r1_text == "An  Realistic (Doer) A.P.T";
      }elseif (max($r3,$r5,$r6)==$r3) {
      $r4r2r3_text == "An Artistic (Creator) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
      $r4r2r5_text == "An Intreprising (Persuader) A.P.T";
      }else {
      $r4r2r6_text == "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r3,$r5,$r6)==$r3) {
      $r4r3_text = "An Artistic (Creator) A.P.T";
      if (max($r1,$r2,$r5,$r6)==$r1) {
        $r4r3r1_text = "An Realistic (Doer) A.P.T";
      }elseif (max($r3,$r5,$r6)==$r3) {
        $r4r3r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r4r3r5_text = "An Interesting (Persuader) A.P.T";
      }else {
        $r4r3r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r5,$r6)==$r5) {
      $r4r5_text = "An Intreprising (Persuader) A.P.T";
      if (max($r1,$r2,$r3,$r6)==$r1) {
        $r4r5r1_text = "An Realistic (Doer) A.P.T";
      }elseif (max($r3,$r2,$r6)==$r2) {
        $r4r5r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r6)==$r3) {
        $r4r5r3_text = "An Artistic (Creator) A.p.t";
      }else {
        $r4r5r6_text = "A Conventional (Organizer) A.P.T";
      }
    }else {
      $r4r6_text = "A Conventional (Organizer) A.P.T";
      if(max($r1,$r2,$r3,$r5)==$r1) {
        $r4r6r1_text = "A Realistic (Doer) A.P.t";
      }elseif (max($r3,$r2,$r5)==$r2) {
        $r4r6r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r5)==$r3) {
        $r4r6r3_text = "An Artistic (Creator) A.P.T";
      }else {
        $r4r6r5_text = "An Intreprising (Persuader) A.P.T";
      }
    }

    $_SESSION["r"] = $r4_text;
    $_SESSION["try"] = "4";
    echo $r4_text;
  } elseif (max($r5,$r6)==$r5) {
    $r5_text = "An INTREPRISING (Persuader) A.P.T";

    if (max($r1,$r2,$r3,$r4,$r6)==$r1) {
      $r5r1_text = "A Realistic (Doer) A.P.T";
      if (max($r2,$r3,$r4,$r6)==$r2) {
        $r5r1r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r5,$r6)==$r3) {
        $r5r1r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r5,$r6)==$r4) {
        $r5r1r4_text = "A Social (Helper) A.P.T";
      }else {
        $r5r1r6_text = "A Conventional (Organizer) A.P.T";
      }/* Continue */
    }elseif (max($r2,$r3,$r4,$r6)==$r2) {
      $r5r2_text = "An Investigative (Thinker) A.P.T";
      if (max($r1,$r3,$r4,$r6)==$r1) {
        $r5r2r1_text == "An  Realistic (Doer) A.P.T";
      }elseif (max($r3,$r4,$r6)==$r3) {
      $r5r2r3_text == "A Artistic (Creator) A.P.T";
      }elseif (max($r4,$r6)==$r5) {
      $r5r2r4_text == "A Social (Helper) A.P.T";
      }else {
      $r5r2r6_text == "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r3,$r4,$r6)==$r3) {
      $r5r3_text = "An Artistic (Creator) A.P.T";
      if (max($r1,$r2,$r4,$r6)==$r1) {
        $r5r3r1_text = "An Realistic (Doer) A.P.T";
      }elseif (max($r3,$r5,$r6)==$r3) {
        $r5r3r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r5,$r6)==$r5) {
        $r5r3r4_text = "An Interesting (Persuader) A.P.T";
      }else {
        $r5r3r6_text = "A Conventional (Organizer) A.P.T";
      }
    }elseif (max($r5,$r6)==$r5) {
      $r5r4_text = "An Intreprising (Persuader) A.P.T";
      if (max($r1,$r2,$r3,$r6)==$r1) {
        $r5r4r1_text = "An Realistic (Doer) A.P.T";
      }elseif (max($r3,$r2,$r6)==$r2) {
        $r5r4r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r6)==$r3) {
        $r5r4r3_text = "An Artistic (Creator) A.p.t";
      }else {
        $r5r4r6_text = "A Conventional (Organizer) A.P.T";
      }
    }else {
      $r5r6_text = "A Conventional (Organizer) A.P.T";
      if(max($r1,$r2,$r3,$r4)==$r1) {
        $r5r6r1_text = "A Realistic (Doer) A.P.t";
      }elseif (max($r3,$r2,$r5)==$r2) {
        $r5r6r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r4)==$r3) {
        $r5r6r3_text = "An Artistic (Creator) A.P.T";
      }else {
        $r5r6r4_text = "A Social (Helper) A.P.T";
      }
    }

    $_SESSION["r"] = $r5_text;
    $_SESSION["try"] = "5";
    echo $r5_text;
  } else {
    $r6_text = "A CONVENTIONAL (Organizers) A.P.T";

        if (max($r1,$r2,$r3,$r4,$r5)==$r1) {
      $r6r1_text = "A Realistic (Doer) A.P.T";
      if (max($r2,$r3,$r4,$r5)==$r2) {
        $r6r1r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r4,$r5)==$r3) {
        $r6r1r3_text = "An Artistic (Creator) A.P.T";
      }elseif (max($r4,$r5)==$r4) {
        $r6r1r4_text = "A Social (Helper) A.P.T";
      }else {
        $r6r1r5_text = "An Intreprising (Persuader) A.P.T";
      }/* Continue */
    }elseif (max($r2,$r3,$r4,$r5)==$r2) {
      $r6r2_text = "An Investigative (Thinker) A.P.T";
      if (max($r1,$r3,$r4,$r5)==$r1) {
        $r6r2r1_text == "A  Realistic (Doer) A.P.T";
      }elseif (max($r3,$r4,$r5)==$r3) {
      $r6r2r3_text == "An Artistic (Creator) A.P.T";
      }elseif (max($r4,$r5)==$r4) {
      $r6r2r4_text == "A Social (Helper) A.P.T";
      }else {
      $r6r2r5_text == "An Intreprising (Persuader) A.P.T";
      }
    }elseif (max($r3,$r4,$r5)==$r3) {
      $r6r3_text = "An Artistic (Creator) A.P.T";
      if (max($r1,$r2,$r4,$r5)==$r1) {
        $r6r3r1_text = "An Realistic (Doer) A.P.T";
      }elseif (max($r3,$r4,$r5)==$r3) {
        $r5r3r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r4,$r5)==$r5) {
        $r5r3r4_text = "A Social (Helper) A.P.T";
      }else {
        $r6r3r5_text = "An Intreprising (Persuader) A.P.T";
      }
    }elseif (max($r4,$r5)==$r4) {
      $r6r4_text = "An Intreprising (Persuader) A.P.T";
      if (max($r1,$r2,$r3,$r5)==$r1) {
        $r6r4r1_text = "A Realistic (Doer) A.P.T";
      }elseif (max($r3,$r2,$r5)==$r2) {
        $r6r4r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r5)==$r3) {
        $r6r4r3_text = "An Artistic (Creator) A.p.t";
      }else {
        $r6r4r5_text = "An Intreprising (Persuader) A.P.T";
      }
    }else {
      $r6r5_text = "An Intreprising (Persuader) A.P.T";
      if(max($r1,$r2,$r3,$r4)==$r1) {
        $r6r5r1_text = "A Realistic (Doer) A.P.t";
      }elseif (max($r3,$r2,$r4)==$r2) {
        $r6r5r2_text = "An Investigative (Thinker) A.P.T";
      }elseif (max($r3,$r4)==$r3) {
        $r6r5r3_text = "An Artistic (Creator) A.P.T";
      }else {
        $r6r5r4_text = "A Social (Helper) A.P.T";
      }
    }


    $_SESSION["r"] = $r6_text;
    $_SESSION["try"] = "6";
    echo $r6_text;
  }
//}

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
session_unset(); 

// destroy the session 
//session_destroy(); 
?>
<?php
  session_start();
?>
<?php

	if(isset($_POST["q70"]) && isset($_POST["q71"]) && isset($_POST["q72"] ) && isset($_POST["q73"]) && isset($_POST["q74"])){
	$test12 = $_POST["q70"] + $_POST["q71"] + $_POST["q72"] + $_POST["q73"] + $_POST["q74"];
	echo $test12;
	echo "<br/>";
	echo $_SESSION["test11"];

	$test11 = $_SESSION["test11"];

	$test11_12 = $test12 + $test11;
	$_SESSION["test11_12"] = "$test11_12";
	
	echo "<br/>";
	echo $_SESSION["test11_12"];
}
?>

<?php

	$r1 = $_SESSION["test1_2"];
	$r2 = $_SESSION["test3_4"];
	$r3 = $_SESSION["test5_6"];
	$r4 = $_SESSION["test7_8"];
	$r5 = $_SESSION["test9_10"];
	$r6 = $_SESSION["test11_12"];	

	if(max($r1,$r2,$r3,$r4,$r5,$r6)==$r1){
		$r1_text = "REALISTIC - Doer";
		echo $r1_text;
	} elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r2) {
		$r2_text = "INVESTIGATIVE - Thinkers";
		echo $r2_text;
	} elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r3) {
		$r3_text = "ARTISTIC - Creators";
		echo $r3_text;
	} elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r4) {
		$r4_text = "SOCIAL - Helpers";
		echo $r4_text;
	} elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r5) {
		$r5_text = "INTREPRISING - Persuaders";
		echo $r5_text;
	} elseif (max($r1,$r2,$r3,$r4,$r5,$r6)==$r6) {
		$r6_text = "CONVENTIONAL - Organizers";
		echo $r6_text;
	}
?>
<?php
session_start();
// Include the database connection file
include("../connection.php");

//Checking the profile information for user
$email = $_SESSION["email"];
//echo "$email";


    $result = mysql_query("SELECT `id`, `first_name`, `last_name`, `dob`, `email`, `tel`, `country`, `password`, `cpassword`, `level`, `tel2`, `info` FROM `oryac`.`users`
            WHERE `users`.`id`='$id'") or die(mysql_error());

    while ($row = mysql_fetch_assoc($result)) {
        echo "
                {$row['id']}<br>
                {$row['first_name']}

        ";
        
        //$_SESSION["personality"] = $profile['personality'];
       
    }
?>
<!--
        $_SESSION["id"]          =1
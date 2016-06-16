<?php
session_start();
// Include the database connection file
include("connection.php");

//Checking the profile information for user
$email = $_SESSION["email"];
echo "$email";


    $sql = "SELECT `id`, `first_name`, `last_name`, `dob`, `email`, `tel`, `country`, `password`, `cpassword`, `level`, `tel2`, `info` FROM users
            WHERE email='$email'";

    $result = mysql_query($sql) or die(mysql_error());

    while ($profile = mysql_fetch_assoc($result)) {

        $_SESSION["id"]          = $profile['id'];
        $_SESSION["fname"]       = $profile['first_name'];
        $_SESSION["lname"]       = $profile['last_name'];
        $_SESSION["dob"]         = $profile['dob'];
        $_SESSION["email"]       = $profile['email'];
        $_SESSION["tel"]         = $profile['tel'];
        $_SESSION["country"]     = $profile['country'];
        $_SESSION["password"]    = $profile['password'];
        $_SESSION["cpassword"]   = $profile['cpassword'];
        $_SESSION["level"]       = $profile['level'];
        $_SESSION["tel2"]        = $profile['tel2'];
        $_SESSION["info"]        = $profile['info'];
        $_SESSION["country"]     = $profile['country'];
        //$_SESSION["personality"] = $profile['personality'];
       
    }
    echo $_SESSION["fname"];
?>
<!--
        $_SESSION["id"]          = $profile['id'];
        $_SESSION["fname"]       = $profile['first_name'];
        $_SESSION["lname"]       = $profile['last_name'];
        $_SESSION["dob"]         = $profile['dob'];
        $_SESSION["email"]       = $profile['email'];
        $_SESSION["tel"]         = $profile['tel'];
        $_SESSION["country"]     = $profile['country'];
        $_SESSION["password"]    = $profile['password'];
        $_SESSION["cpassword"]   = $profile['cpassword'];
        $_SESSION["personality"] = $profile['personality'];


        $_SESSION["id"]          = {$profile['id']};
        $_SESSION["fname"]       = {$profile['first_name']};
        $_SESSION["lname"]       = {$profile['last_name']};
        $_SESSION["dob"]         = {$profile['dob']};
        $_SESSION["email"]       = {$profile['email']};
        $_SESSION["tel"]         = {$profile['tel']};
        $_SESSION["country"]     = {$profile['country']};
        $_SESSION["password"]    = {$profile['password']};
        $_SESSION["cpassword"]   = {$profile['cpassword']};
        $_SESSION["personality"] = {$profile['personality']};
-->
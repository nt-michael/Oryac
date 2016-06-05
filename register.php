<?php
// Include the database connection file
require_once("connection.php");

//check if the post request is set
if(isset($_POST)){
    //Get all the information from the post request
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $dob = $_POST["dob"];
    $country = $_POST["country"];
    $apt = $_POST["apt"];
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["password"]);

    if($password != $cpassword){
        die("Passwords do not match.");
    }

    $select_query = "SELECT * FROM users WHERE email='$email'";
    $res = mysql_query($select_query);
    $numRows = mysql_num_rows($res);

    if($numRows > 0){
        die("User already exist in the Database, can't create account.");
    }

    $query = "INSERT INTO users VALUES ('', '$fname', '$lname', '$dob', '$email', '$tel', '$country', '$password', '$password', '$apt');";

    $results = mysql_query($query);
    if($results){
        echo "User registration successful";
    } else {
        die("Error while creating user");
    }
}
//there was a problem with the post request
else {
    die("Bad request Error 400");
}
?>
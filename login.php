<?php
    session_start();

// Include the database connection file
require_once("connection.php");

//checking POST request and then logging 
//the user into the system.
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = ($_POST["password"]);
    $psw = $_POST["password"];

    $_SESSION["psw"] = $psw;

    $sql = "SELECT * FROM users
            WHERE email='$email' AND password='$password'";
    $result = mysql_query($sql);
    $numRows = mysql_num_rows($result);

    if($numRows === 1) {
        $_SESSION["email"] = $email;
        //header("Location: ./profile_page.php");
        $_SESSION["in"] = 1;

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

        header("location:home.php?msg2 = succesfully logged in");
        exit;
        //echo "You logged in successfully";
    } else {
        header("location:index.php?msg=Invalid Login Information");
        exit;
    }
}

    function personality($type)
    {
        switch ($type) {
            case 'Realistic':
                # code...
                break;
            case 'Investigative':
                # code...
                break;
            case 'Artistic':
                # code...
                break;
            case 'Social':
                # code...
                break;
            case 'Enterprising':
                # code...
                break;
            case 'Conventional':
                # code...
                break;
            default:
                # code...
                break;
        }
    }

?>
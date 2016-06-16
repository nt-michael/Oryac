<?php
    session_start();
?>
<?php
// Include the database connection file
require_once("connection.php");

//checking POST request and then logging 
//the user into the system.
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
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
        header("location:home.php?msg2=You logged in successfully");
        exit;
        //echo "You logged in successfully";
    } else {
        header("location:index.php?msg=Invalid Login Information");
        exit;
    }
}
?>
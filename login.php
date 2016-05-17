<?php
include("connection.php");

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM users
            WHERE email='$email' AND password='$pass'";
    $result = mysql_query($sql);
    $numRows = mysql_num_rows($result);
    if($numRows==1) {
        session_start();
        $_SESSION["userid"] = $userid;
        header("Location: ./profile_page.php");
    } else {
        echo "Invalid Login Information";   
    }
}
?>

<!--<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
<table>
<tr><td>User Name</td><td><input type="text" name="username" /></td></tr>
<tr><td>Password</td><td><input type="password" name="pass" /></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Login" /></td></tr>
</table>
</form>
<?php echo htmlspecialchars($url) ?>
-->
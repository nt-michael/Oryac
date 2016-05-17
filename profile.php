<?php
session_start(); // start the session
include("connection.php");

$user_id = $_SESSION["userid"]; // store the user id into session

$sql = "SELECT * FROM tbl_user WHERE user_id='$user_id'";
$result = mysql_query($sql);

if($row = mysql_fetch_array($result)) {
    $username = $row["username"];
    $name = $row["name"];
    $email = $row["email"];

    echo "
    <table>
        <tr><td>User Name</td><td> : </td><td>$username</td></tr>
        <tr><td>Name</td><td> : </td><td>$name</td></tr>
        <tr><td>Email</td><td> : </td><td>$email</td></tr>
    </table>
    ";
}
?>
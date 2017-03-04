<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$email = $_POST["email"];
$user_password = $_POST["user_password"];
if(count($_POST)>0) {
    $conn = mysql_connect($servername, $username, $password);
    mysql_select_db($dbname, $conn);
    $result = mysql_query("SELECT * FROM customer_list WHERE email='" . $_POST["email"] . "' and user_password = '". $_POST["user_password"]."'");
    $count  = mysql_num_rows($result);
    if($count==0) {  
        header("location:home.php");
    } else {
        $_SESSION["email"]=$_POST["email"];
        $_SESSION["user_password"]=$_POST["user_password"];
        header("location:homeAuth.php");
    }
}
$conn = null;
?>
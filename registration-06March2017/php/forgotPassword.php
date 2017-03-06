<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$email = $_POST["registeredEmail"];
$user_password = $_POST["user_password"];
if(count($_POST)>0) {
    $conn = mysql_connect($servername, $username, $password);
    mysql_select_db($dbname, $conn);
    $result = mysql_query("SELECT * FROM customer_list WHERE email='" . $_POST["registeredEmail"] ."'");
    $count  = mysql_num_rows($result);
    if($count==0) {  
        $_SESSION["message"] = "This emailId is not registered. Please try again.";
        header("location:recoverPassword.php");
    } else {
        $_SESSION["registeredEmail"]=$_POST["registeredEmail"]; 
        $_SESSION["message"] = "Please click the link sent to your registered email.";
        header("location:recoverPassword.php");
    }
}
$conn = null;
?>
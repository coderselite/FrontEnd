<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$comment = $_POST["comment"];
$rating = $_POST["rating"];
if(count($_POST)>0) {
    $conn = mysql_connect($servername, $username, $password);
    mysql_select_db($dbname, $conn);
    $result = mysql_query("INSERT INTO customer_feedback (feedback_id, rating, comment) VALUES ('0', '$rating', '$comment')");
    header("location:homeAuth.php");
}
$conn = null;
?>
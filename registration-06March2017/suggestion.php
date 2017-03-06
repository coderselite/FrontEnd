<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$title = $_POST["title"];
$technology = $_POST["technology"];
$description = $_POST["description"];
if(count($_POST)>0) {
    $conn = mysql_connect($servername, $username, $password);
    mysql_select_db($dbname, $conn);
    $result = mysql_query("INSERT INTO customer_suggestions (suggestion_id, title, technology, description) VALUES ('0', '$title', '$technology', '$description')");
    header("location:homeAuth.php");
}
$conn = null;
?>
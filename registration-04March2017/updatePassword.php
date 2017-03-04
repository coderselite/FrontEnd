<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$user_password = $_POST["userPassword"];
$id = $_SESSION["customer_id"];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(count($_POST)>0){
	$sql = "UPDATE customer_list SET user_password = '$user_password' WHERE customer_id = '".$_SESSION["customer_id"]."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_affected_rows($conn);
	if($result == 1){
		$_SESSION["message"] = "Password is changed successfully";
		header("location:forgotPasswordForm.php?id=$id");
	}else{
		$_SESSION["message"] = "Something went wrong. Please try again";
		header("location:forgotPasswordForm.php?id=$id");
	}
}
?>
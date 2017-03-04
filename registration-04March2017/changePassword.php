<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$user_old_password = $_POST["userOldPassword"];
$user_password = $_POST["userPassword"];
$conn = mysqli_connect($servername, $username, $password, $dbname);
$id = "";
if(count($_POST)>0) {
	$sql = "SELECT * FROM customer_list WHERE user_password ='" . $_POST["userOldPassword"] ."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_num_rows($query);
	if($result == 1){
		while($row = mysqli_fetch_assoc($query)) {
		$id = $row["customer_Id"];
		}
		$sql1 = "UPDATE customer_list set user_password = '$user_password' WHERE customer_Id = $id";
		$query = mysqli_query($conn, $sql1);
		$result1 = mysqli_affected_rows($conn);
		if($result == 1){
			$_SESSION["changePasswordMessage"] = "Password is changed successfully.";
			header("location:changePasswordForm.php");
		}else{
			$_SESSION["changePasswordMessage"] = "something went wrong. Please try again.";
			header("location:changePasswordForm.php");
		}		
	}else{
		$_SESSION["changePasswordMessage"] = "Enter correct old password.";
		header("location:changePasswordForm.php");
	}
	
}
?>
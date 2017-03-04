<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$email = $_POST["email"];
$user_password = $_POST["user_password"];
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(count($_POST)>0) {
	$sql = "SELECT * FROM customer_list WHERE email='".$_POST["email"]."'";
	$result = mysqli_query($conn, $sql);
	$count  = mysqli_num_rows($result);
	while($row = mysqli_fetch_assoc($result)) {
		$_SESSION["status"] = $row["status"];
		$_SESSION["user_password"] = $row["user_password"];
	}
	$pwd = $_SESSION["user_password"];
	$flag = $_SESSION["status"];
	$flag1 = strcmp($_SESSION["user_password"], $user_password);
	if($count == 1 && $flag1 == 0 ) {
		if($flag == "active"){
			$_SESSION["email"]=$_POST["email"];
			$_SESSION["user_password"]=$_POST["user_password"];
			header("location:homeAuth.php");
		}else{
			$_SESSION["loginMessage"] = "Email activation not done.";
			header("location:loginForm.php");
		}
	}else{
		$_SESSION["loginMessage"] = "$flag1 $flag $pwd Invalid credentials. Try again.";
		header("location:loginForm.php");
	}
}

mysqli_close($conn);
?>
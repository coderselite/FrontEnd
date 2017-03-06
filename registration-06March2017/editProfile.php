<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$first_name = $_POST["firstName"];
$last_name = $_POST["lastName"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$email = $_SESSION["email"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
$id = "";

if(count($_POST)>0) {
	$sql = "SELECT * FROM customer_list WHERE email ='" . $email ."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_num_rows($query);
	if($result == 1){
		while($row = mysqli_fetch_assoc($query)) {
		$id = $row["customer_Id"];
		}
		$sql1 = "UPDATE customer_list set first_name = '$first_name', last_name='$last_name', mobile='$mobile', address='$address' WHERE customer_Id = $id";
		$query = mysqli_query($conn, $sql1);
		$result1 = mysqli_affected_rows($conn);
		if($result == 1){
			$_SESSION["updateProfileMessage"] = "Profile Updated Successfully.";
			header("location:editProfileForm.php");
		}else{
			$_SESSION["updateProfileMessage"] = "Something went wrong. Please try again.";
			header("location:editProfileForm.php");
		}
	}
}
?>
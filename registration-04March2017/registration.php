<script src="js/login.js"></script>
<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$first_name = $_POST["firstName"];
$last_name = $_POST["lastName"]; 
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$user_password = $_POST["userPassword"];
$email_code = md5($_POST["firstName"] + microtime());
$conn = mysqli_connect($servername, $username, $password, $dbname);
    
if(count($_POST)>0) { 
	$sql = "SELECT * FROM customer_list WHERE email='". $email ."'";
	$result = mysqli_query($conn, $sql);
	$count1  = mysqli_num_rows($conn, $result);
	if($count1 == 0) {
		$sql1 = "INSERT INTO customer_list (first_name, last_name, email, email_code, mobile, address,user_password)
		VALUES ('$first_name', '$last_name', '$email', '$email_code', '$mobile', '$address', '$user_password')";
		$result1 = mysqli_query($conn, $sql1);
		$last_id = mysqli_insert_id($conn);
		$_SESSION["customer_id"] = $last_id;
		if(!empty($last_id))
		{
			$actual_link = "http://$_SERVER[HTTP_HOST]"."/registration/"."activate.php?email=" . $email ."&email_code=" . $email_code;
			$toEmail = $_POST["email"];
			$subject = "User Registration Activation Email";
			$content = "Hello " . $first_name .",\n\nClick this link to activate your account.\n\n<a href='" . $actual_link . "'></a>";
			$mailHeaders = "From: Admin\r\n";
			if(mail($toEmail, $subject, $content, $mailHeaders)) {
				$_SESSION["message_register"] = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account.";
			}
			else{
				$_SESSION["message_register"] = "error in registration";
			}
		  header("location:registrationForm.php");	
		}
		else
		{
		  $_SESSION["message_register"] = "Error in registration, try again";
		  header("location:registrationForm.php");
		}
	}
	else{
		$_SESSION["message_register"] = "This email id is already registered";
		header("location:registrationForm.php");
	}
}
mysqli_close($conn);
?>
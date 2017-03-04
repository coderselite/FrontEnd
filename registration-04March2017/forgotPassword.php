<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$email = $_POST["registeredEmail"];

if(count($_POST)>0) {
    $conn = mysql_connect($servername, $username, $password);
    mysql_select_db($dbname, $conn);
    $result = mysql_query("SELECT * FROM customer_list WHERE email='" . $_POST["registeredEmail"] ."'");
    $count  = mysql_num_rows($result);
	while($row = mysql_fetch_assoc($result)) {
		$id = $row["customer_Id"];
	}
    if($count == 0) {  
        $_SESSION["message"] = "$id $count  This emailId is not registered. Please try again.";
       header("location:recoverPassword.php");
    } else {
        $_SESSION["message"]=$_POST["registeredEmail"]; 
        
			$actual_link = "http://$_SERVER[HTTP_HOST]"."/registration/"."forgotPasswordForm.php?id=" . $id;
			$toEmail = $email;
			$subject = "Password reset link";
			$content = "Click here to reset your password. <a href='" . $actual_link . "'></a>";
			$mailHeaders = "From: Admin\r\n";
			if(mail($toEmail, $subject, $content, $mailHeaders)) {
				
				$_SESSION["message"] = "$id $count $email $id Please click the link sent to your registered email.";
			}
			else{
				$_SESSION["message"] = "Error in sending link";
			}
        header("location:recoverPassword.php");
        
    }
}
$conn = null;
?>
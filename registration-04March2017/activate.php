<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!empty($_GET["email"]) && !empty($_GET["email_code"])) {
	$email = trim($_GET["email"]);
	$email_code = trim($_GET["email_code"]);
	$sql1 = "SELECT COUNT('customer_id') FROM customer_list WHERE email='" . $email. "'";
	mysqli_query($conn,$sql1);
	if (mysqli_affected_rows($conn) == 1) {
	    $sql2 = "SELECT COUNT('customer_id') FROM customer_list WHERE email='" . $email. "' AND email_code='" . $email_code . "'";
	    mysqli_query($conn,$sql2);
	    if (mysqli_affected_rows($conn) == 1) {
	        $sql3 = "UPDATE customer_list SET status = 'active' WHERE email='" . $_GET["email"]. "'";
	        $query = mysqli_query($conn, $sql3);
	        $result = mysqli_affected_rows($conn);
	        if($result){
		        $message = "Your account is activated.";
	        } else {
		        $message = "Problem in account activation.";
	        }
		} else {
			$message = "Problem in account activation email or email code didnt match.";
		}
	} else {
		$message = "We couldnt find that email address.";
	}
}
?>
<html>
<head>
<title>PHP User Registration Form</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php if(isset($message)) { ?>
<div class="message"><?php echo $message; ?></div>
<?php } ?>
<div class="message">
<a href="loginForm.php">Click here</a> to login.
</div>
</body></html>
		
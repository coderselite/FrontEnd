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


    
    if(count($_POST)>0) {
    $conn = mysql_connect($servername, $username, $password);
    mysql_select_db($dbname, $conn);
    $sql = "INSERT INTO customer_list (customer_id, first_name, last_name, email, mobile, address,user_password)
    VALUES ('0', '$first_name', '$last_name', '$email', '$mobile', '$address', '$user_password')";
    $result = mysql_query($sql);
    if(!empty($result))
    {
      $_SESSION["message_register"] = "Registered successfully";
      header("location:home.php");
    }
    else
    {
      $_SESSION["message_register"] = "Error in registration, try again";
    }
}
$conn = null;
?>
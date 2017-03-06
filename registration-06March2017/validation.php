<?php
$value = $_GET['query'];
$formfield = $_GET['field'];

//Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "firstName") {
    if (strlen($value) < 4) {
        echo "Must be 3+ letters";
    } else {
        echo "<span>Valid</span>";
    }
}

if ($formfield == "lastName") {
    if (strlen($value) < 4) {
        echo "Must be 3+ letters";
    } else {
        echo "<span>Valid</span>";
    }
}

//Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
        echo "Invalid email";
    } else {
        echo "<span>Valid</span>";
    }
}

if ($formfield == "mobile") {
    if (strlen($value) == 10) {
        echo "Must be valid 10 digit number";
    } else {
        echo "<span>Valid</span>";
    }
}

if ($formfield == "address") {
    if (strlen($value) < 10) {
        echo "Must be 10+ letters";
    } else {
        echo "<span>Valid</span>";
    }
}


//Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "userPassword") {
    if (strlen($value) < 6) {
        echo "Password too short";
    } else {
        echo "<span>Strong</span>";
    }
}

?>
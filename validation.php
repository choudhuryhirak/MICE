<?php
    
    $value = $_GET['query'];
    $formfield = $_GET['field'];
    // Check Valid or Invalid user name when user enters user name in username input field.
    // Check Valid or Invalid password when user enters password in password input field.
    if ($formfield == "pass_aj") {
    if (strlen($value) < 6) {
    echo "Password too short";
    } else {
    echo "Strong";
    }
    }
    // Check Valid or Invalid email when user enters email in email input field.
    if ($formfield == "email_aj") {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
    echo "Invalid email";
    } else {
    echo "Valid";
    }
    }
    
    
?>
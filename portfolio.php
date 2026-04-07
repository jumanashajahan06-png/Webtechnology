<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get data safely
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validation

    // 1. Empty check
    if (empty($name) || empty($email) || empty($message)) {
        echo "Error: All fields are required!";
    }

    // 2. Name validation
    elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        echo "Error: Name should contain only letters!";
    }

    // 3. Email validation
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid email format!";
    }

    // 4. Success
    else {
        echo "<h2>Form Submitted Successfully</h2>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Message: " . htmlspecialchars($message);
    }
}

?>

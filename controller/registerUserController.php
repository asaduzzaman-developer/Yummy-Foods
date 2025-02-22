<?php
session_start();
include_once "../database/env.php";

$firstName = $_REQUEST['first_name'];
$lastName = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];
$errors = [];

$encpassword = password_hash($password, PASSWORD_BCRYPT);

// print_r($confirmPassword);
//* Data Validation
// First Name Validation
if (empty($firstName)) {
    $errors['firstName_error'] = "Please enter your first name.";
} else if (strlen($firstName) > 31) {
    $errors['firstName_error'] = "First name should not be more than 31 characters.";
}
// Email Validation
if (empty($email)) {
    $errors['email_error'] = "Please enter your email address.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email_error'] = "Invalid email address. Please enter a valid email address.";
} else {
    $query = "SELECT email from users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (($result->num_rows) > 0) {
        $errors['email_error'] = "Email already exists. Please enter a different email address.";
    }
}

// Password Validation
if (empty($password)) {
    $errors['password_error'] = "Please enter your password.";
} else if (strlen($password) < 8) {
    $errors['password_error'] = "Password should be at least 8 characters long.";
}
// Confirm Password Validation
if (empty($confirmPassword)) {
    $errors['password_error'] = "Please confirm your password.";
} else if ($password != $confirmPassword) {
    $errors['password_error'] = "Passwords do not match. Please try again.";
}



//* Check for errors
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: ../register.php');
} else {
    $query = "INSERT INTO users(first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$encpassword')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['user'] = $_REQUEST;
        header('Location: ../dashboard/index.php');
    }
}

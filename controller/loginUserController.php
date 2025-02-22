<?php
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$errors = [];
$user = [];

//* Data Validation

// Email Validation

if (empty($email)) {
    $errors['email_error'] = "Please enter your email address.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email_error'] = "Invalid email address. Please enter a valid email address.";
}

// Password Validation
if (empty($password)) {
    $errors['password_error'] = "Please enter your password.";
}



//* Login Logic
// if entered email and password are correct, then user will be logged in
include_once "../database/env.php";
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if ($result->num_rows == 0) {
    $errors['email_error'] = "Email not found. Please try again.";
} else {

    $user = mysqli_fetch_assoc($result);
    if (!password_verify($password, $user['password'])) {
        $errors['password_error'] = "Incorrect password. Please try again.";
    }
}

//* Check for errors
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: ../login.php');
} else {
    // Login Success
    // print_r($user);
    // exit();
    $_SESSION['user'] = $user;
    header('Location: ../dashboard/index.php');
}

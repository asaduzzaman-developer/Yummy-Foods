<?php
session_start();
$password = $_REQUEST["new_password"];
$confirmPassword = $_REQUEST["confirm_password"];
$oldPassword = $_REQUEST["old_password"];
$encpassword = password_hash($password, PASSWORD_BCRYPT);
$errors = [];

//* Password Validation

//* Old Password Validation
if (empty($oldPassword)) {
    $errors['old_password_error'] = "Old Password is required";
}
//* New Password Validation
if (empty($password)){
    $errors['password_error'] = "New Password is required";
} 

//* Confirm Password Validation
if ($password != $confirmPassword) {
    $errors['confirm_password_error'] = "Confirm Password does not match with New Password";
}

//* Password Matching with Database
// print_r($_SESSION['user']['password']);
if (!password_verify($oldPassword, $_SESSION['user']['password'])) {
    $errors['old_password_error'] = "Old Password is incorrect";
}

//* Check for errors
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: ../dashboard/profile.php');
} else {
    include_once "../database/env.php";
    $id = $_SESSION['user']['id'];
    $query = "UPDATE users SET password='$encpassword' WHERE id ='$id'";
    $result = mysqli_query($conn, $query);
    $id = $_SESSION['user']['password'] = $encpassword;
    header('Location: ../dashboard/profile.php');
}

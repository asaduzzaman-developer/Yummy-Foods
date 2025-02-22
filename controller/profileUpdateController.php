<?php
include '../database/env.php';
session_start();


$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$profile_img = $_FILES['profile_img'];
$id = $_SESSION['user']['id'];
$errors = [];


define('SELECTED_EXTENSION', ['jpg', 'jpeg', 'png', 'gif']);
$extension = pathinfo($profile_img['name'])['extension'];



//* Profile Image Validation
if ($profile_img['size'] > 0){
    if ($profile_img['size'] > 1000000) {
        $errors['profile_img_error'] = "Sorry, your file is too large.";
    } else if (!in_array($extension, SELECTED_EXTENSION)) {
        $errors['profile_img_error'] = "Sorry, only " .join (', ', SELECTED_EXTENSION) ." files are allowed.";
    }
}

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header("Location: ../dashboard/profile.php");
} else {
    if ($profile_img['size'] > 0) {
        
        if (!file_exists( '../uploads/users')){
            mkdir('../uploads/users');
        } 
        $file_name = 'Users-' . uniqid() . ".$extension";
        $uploaded = move_uploaded_file($profile_img['tmp_name'], '../uploads/users/'.$file_name);
        $query = "UPDATE users SET first_name='$first_name',last_name='$last_name',email='$email' ,profile_img='$file_name' WHERE id ='$id'";
    } else {
        $query = "UPDATE users SET first_name='$first_name',last_name='$last_name',email='$email' WHERE id ='$id'";
    }
    mysqli_query($conn, $query);
    $_SESSION['user']['banner_img'] = $file_name;
    header ('Location: ../dashboard/profile.php');
    
}
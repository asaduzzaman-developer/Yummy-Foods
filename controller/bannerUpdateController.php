<?php
include '../database/env.php';
session_start();


$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$cta_text = $_REQUEST['cta_text'];
$cta_link = $_REQUEST['cta_link'];
$video_url = $_REQUEST['video_url'];
$banner_img = $_FILES['banner_img'];
$id = $_SESSION['user']['id'];
$errors = [];






define('SELECTED_EXTENSION', ['jpg', 'jpeg', 'png', 'gif']);
$extension = (pathinfo($banner_img['name'])['extension']);


//* Title Validation
if (empty($title)) {
    $errors['title_img_error'] = 'Title is required';
    } else {
        if (strlen($title) < 10) {
            $errors['title_img_error'] = 'Title must be at least 10 characters long';
            }

//* Profile Image Validation
if ($banner_img['size'] > 0){
    if ($banner_img['size'] > 1000000) {
        $errors['banner_img_error'] = "Sorry, your file is too large.";
    } else if (!in_array($extension, SELECTED_EXTENSION)) {
        $errors['banner_img_error'] = "Sorry, only " .join (', ', SELECTED_EXTENSION) ." files are allowed.";
    }
}
//* error handling
if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header("Location: ../dashboard/banner.php");
} else {
    if ($profile_img['size'] > 0) {
        
        if (!file_exists( '../uploads/banners')){
            mkdir('../uploads/banners');
        } 
        $file_name = 'Banner-' . uniqid() . ".$extension";
        $uploaded = move_uploaded_file($banner_img['tmp_name'], '../uploads/banners/'.$file_name);
        $query = "UPDATE banners SET title='$title', detail='$detail', cta_text='$cta_text', cta_link='$cta_link', video_url='$video_url', banner_img='$file_name' WHERE id = '$id'";
        
    } else {
        $query = "UPDATE banners SET title='$title' ,banner_img='$file_name' WHERE id = '$id'";
    }
    mysqli_query($conn, $query);
    $_SESSION['user']['banner_img'] = $file_name;
    header ('Location: ../dashboard/banner.php');
    
}
}
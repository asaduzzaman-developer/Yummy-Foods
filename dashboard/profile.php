<?php
include_once "../include/backendHeader.php";

?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Profile</h1>
<div class="row">
    <div class="col-lg-8">
        <div class="card rounded-0 shadow">
            <div class="card card-header">
                Profile Info
            </div>
            <div class="card card-body">
                <form action="../controller/profileUpdateController.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="d-block" for="profile_img"><img class="profile_img img-fluid rounded-circle" src="<?=getProfileUrl($fullName)?>" style="height: 258px;width:258px;object-fit:cover;object-position:center;" alt=""></label>
                            <input name="profile_img" class="d-none" type="file" id="profile_img">
                            <span class="text-danger">
                                <?= $_SESSION['errors']['profile_img_error'] ?? null ?>
                            </span>
                        </div>
                        <div class="col-lg-8">
                            <input value="<?= $_SESSION['user']['first_name'] ?>" type="text" class="form-control my-3" name="first_name" placeholder="First Name">
                            <input value="<?= $_SESSION['user']['last_name'] ?>" type="text" class="form-control my-3" name="last_name" placeholder="Last Name">
                            <input value="<?= $_SESSION['user']['email'] ?>" type="text" class="form-control my-3" name="email" placeholder="Email">
                            <button  class="btn btn-primary btn-sm">Update Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card rounded-0 shadow">
            <div class="card card-header">
                Passord Update
            </div>
            <div class="card card-body">
                <form action="../controller/passwordUpdateController.php" method="POST">
                    <div class="form-group">
                        <input type="password" class="form-control my-3" name="old_password" placeholder="Old Password">
                        <span class="text-danger">
                            <?= $_SESSION['errors']['old_password_error'] ?? null ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control my-3" name="new_password" placeholder="New Password">
                        <span class="text-danger">
                            <?= $_SESSION['errors']['password_error'] ?? null ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control my-3" name="confirm_password" placeholder="Confirm Password">
                        <span class="text-danger">
                            <?= $_SESSION['errors']['confirm_password_error'] ?? null ?>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once "../include/backendFooter.php";
unset($_SESSION['errors']);
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#profile_img').change(function() {
            let file = $(this)[0].files[0]
            let url = URL.createObjectURL(file)
            $('.profile_img').attr('src', url)
        })
    })
</script>
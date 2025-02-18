<?php
include_once "./include/authHeader.php";
?>

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div style="background-image: url(./assets/img/gallery/gallery-6.jpg);" class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="./controller/registerUserController.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="first_name" type="text" class=" <?=isset($_SESSION['errors']['firstName_error']) ? 'is-invalid' : '' ?> form-control form-control-user" placeholder="First Name">
                                        <span class="text-danger">
                                            <?=$_SESSION['errors']['firstName_error'] ?? null ?>
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="last_name" type="text" class="form-control form-control-user" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class=" <?=isset($_SESSION['errors']['email_error']) ? 'is-invalid' : '' ?> form-control form-control-user" placeholder="Email Address">
                                    <span class="text-danger">
                                            <?=$_SESSION['errors']['email_error'] ?? null ?>
                                    </span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class=" <?=isset($_SESSION['errors']['password_error']) ? 'is-invalid' : '' ?> form-control form-control-user"  placeholder="Password">
                                        <span class="text-danger">
                                            <?=$_SESSION['errors']['password_error'] ?? null ?>
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="confirmPassword" type="password" class=" <?=isset($_SESSION['errors']['password_error']) ? 'is-invalid' : '' ?> form-control form-control-user" placeholder="Repeat Password">
                                        <span class="text-danger">
                                            <?=$_SESSION['errors']['password_error'] ?? null ?>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
include_once "./include/authFooter.php";
?>

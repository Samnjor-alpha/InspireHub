<?php include '../database/config.php';
include 'admincontrollers/helper.php';
include 'admincontrollers/authcontrollers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <?php include 'adminstyles/css.php' ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>Inspire </b>HUB
    </div>

    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login to start your session</p>







                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="fnames" value="<?= ($_POST['fnames']) ?? null ?>" class="form-control" placeholder="Full Names">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="wemail" value="<?= ($_POST['wemail']) ?? null ?>" class="form-control" placeholder="Work Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="pemail" value="<?= ($_POST['pemail']) ?? null ?>" class="form-control" placeholder="Personal Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="Confirm Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <input type="checkbox" onclick="showpassword()"> Show Password
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="signup" class="btn btn-primary btn-block">Sign Up</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <a href="login.php"> <small>Already have an account?</small></a>
                        </div>
                    </div>
                </form>




        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<?php include 'adminstyles/scripts.php' ?>
<?php include 'admincontrollers/auth.php';  ?>
</body>
</html>

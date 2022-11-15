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
<?php if (isset($_GET['fl'])){


    ?>

    <p class="text-center mt-1 mb-2"><strong><?php echo obfuscate_email("samnjorm@gmail.com");?></strong></p>
    <?php if(checkaccount()){ ?>
        <a href="login.php" class="btn btn-primary btn-block">Login</a>
            <?php }else{?>
    <form action="" method="post">

        <div class="input-group mb-3">
            <input type="password" name="pwd" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- /.col -->
            <div class="col-6">
                <button type="submit"  name="fl_sign" class="btn btn-primary btn-block">Create Account</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
            <?php }}else{?>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
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
                <div class="row">
                    <div class="col-8">
                        <input type="checkbox" onclick="showpassword()"> Show Password
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" name="signin" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-8">
                        <a href="signup.php"> <small>Create Account</small></a>
                    </div>
                </div>
            </form>

<?php } ?>



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

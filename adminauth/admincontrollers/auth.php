<?php
if (isset($_POST['fl_sign'])){
$pwd=$_POST['pwd'];
    if(createfirstadmin($pwd)){
        echo "<script>
toastr.success('Account  setup was successful', 'Account created');

</script>";

    }else{
        echo "<script>
toastr.info('Account already exists', 'Contact admin for account creation');

</script>";

    }
}


if (isset($_POST['signin'])){

    $email=$_POST['email'];
    $password=$_POST['pwd'];
    if (empty($email) || empty($password)){
        echo "<script>
toastr.error('All fields are required', 'Required');
</script>";
    }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)===false){
        echo "<script>
toastr.warning('The email entered is invalid', 'Invalid');
</script>";
    }elseif(!checkifemailexists($email)){
        echo "<script>
toastr.warning('Contact admin for account creation', 'Invalid');
</script>";
    }elseif (loginauth($email,$password)){
        echo "<script>
toastr.success('Redirecting to dashboard', 'Authentication success');
window.location.href='dashboard/dashboard.php';
</script>";

    }else{
        echo "<script>
toastr.error('Incorrect password', 'Wrong Credentials');
</script>";
    }
}
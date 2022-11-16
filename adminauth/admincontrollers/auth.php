<?php
if (isset($_POST['signup'])){
    $fnames=trim($_POST['fnames'],'');
    $work_mail=trim($_POST['wemail'],'');
    $pers_email=trim($_POST['pemail'],'');
    $pwd=trim($_POST['pwd'],'');
    $cpwd=trim($_POST['cpwd'],'');

    if (!empty($fnames)|| !empty($work_mail)|| !empty($pers_email)|| !empty($pwd) || !empty($cpwd)){
if (filter_var($work_mail, FILTER_VALIDATE_EMAIL)===false && filter_var($pers_email, FILTER_VALIDATE_EMAIL)){
    echo "<script>
toastr.error('invalid email formats','Invalid Email');
</script>";
}elseif (!verifyworkmail($work_mail)){
    echo "<script>
toastr.error('Use the work email provided','Unknown Work Email');
</script>";
}elseif(!checkworkemail($work_mail)){
    echo "<script>
toastr.error('The work email does not exist','Unknown Work Email');
</script>";
}elseif (checkifemailexists($work_mail)|| checkifemailexists($pers_email)){
    echo "<script>
toastr.info('Personal or Work Email is associated with an account','Email Exists');
</script>";
}elseif ($pwd !==$cpwd){
    echo "<script>
toastr.error('Password do not match','Password Mismatch');
</script>";
}else{
    $hash=password_hash($pwd,PASSWORD_DEFAULT);
    $today =date('Y-m-d H:i:s');
    $add="insert into admins set names='$fnames',email='$work_mail',p_email='$pers_email',role='admin',password='$hash',created_at='$today',last_login='$today'";
    if (mysqli_query($conn,$add)){
        $_SESSION['adminID']=mysqli_insert_id($conn);
        $_SESSION['role'] = 'admin';
        $_SESSION['Anames'] =$fnames;
        $_SESSION['Aemail'] =$work_mail;

        echo "<script>
toastr.success('Account created successfully.');
window.location.href='dashboard/dashboard.php';
</script>";
    }else{
        echo "<script>
toastr.error('An error occured.Try again.','Error');

</script>";
    }
}

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
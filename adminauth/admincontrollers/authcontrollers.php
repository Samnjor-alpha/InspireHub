<?php
if(!isset($_SESSION)){
    session_start();
}
function createfirstadmin($pwd): bool
{
    date_default_timezone_set('Africa/Nairobi');
    global $conn;
    $email="samnjorm@gmail.com";
    $pwd=password_hash($pwd,PASSWORD_DEFAULT);
    $name="Samnjor";
    $role="admin";
$created=date("Y-m-d H:i:s");
    $sql="insert into admins set names='$name',role='$role',created_at='$created',email='$email',password='$pwd'";
if(!checkifemailexists($email)) {
    if (mysqli_query($conn, $sql)) {
        return true;
    }
    return true;
}else{
    return false;
}
}
function loginauth($email,$password): bool
{
global $conn;
$sql=mysqli_query($conn,"select * from admins where email='$email'");
$row=mysqli_fetch_assoc($sql);
    if (password_verify($password,$row['password'])){

           $_SESSION['role'] = $row['role'];
           $_SESSION['adminID'] = $row['id'];
           $_SESSION['Anames'] = $row['names'];
           $_SESSION['Aemail'] = $row['email'];

       return true;
    }else{
        return false;
    }


}

function redirect($location): void
{
    header("location: ".BASE_URL.'adminauth/'.$location);
}
function redirectrole($role): void
{
    if ($role=="admin"){
        redirect("dashboard/dashboard.php");
    }elseif($role=='user'){
        redirect("dashboard/home.php");
    }else{
        echo "<script>
alert('Not authorised');
    </script>";
    }
}
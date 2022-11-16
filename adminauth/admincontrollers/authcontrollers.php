<?php
date_default_timezone_set('Africa/Nairobi');
if(!isset($_SESSION)){
    session_start();
}

function loginauth($email,$password): bool
{
global $conn;
$sql=mysqli_query($conn,"select * from admins where email='$email'");
$row=mysqli_fetch_assoc($sql);
    if (password_verify($password,$row['password'])){
mysqli_query($conn,"update admins set last_login=NOW() where id='".$row['id']."'");
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
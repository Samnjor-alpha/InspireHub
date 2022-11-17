<?php
$getclients=mysqli_query($conn,"select * from clients");
function checkclienttel($tel): bool
{
global $conn;
$getdata=mysqli_query($conn,"select * from clients where tel_no='$tel'");

if(mysqli_num_rows($getdata)>0)
{
    return true;
}else{
    return false;
}



}

function checkclientemail($email): bool
{
    global $conn;
    $getdata=mysqli_query($conn,"select * from clients where email='$email'");

    if(mysqli_num_rows($getdata)>0)
    {
        return true;
    }else{
        return false;
    }
}
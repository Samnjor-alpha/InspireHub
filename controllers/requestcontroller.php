<?php

function addquote($name, $email, $tel, $service, $message, $quotationid)
{
global $conn;
date_default_timezone_set("Africa/Nairobi");
$today=date("Y-m-d H:i:s");
$insertdata="insert into request_quotation set client_name='$name',
                                  client_email='$email',
                                  client_tel='$tel',
                                  service_request='$service',
                                  message='$message',
                                  quote_id='$quotationid',
                                  date_requested='$today'";

if (mysqli_query($conn,$insertdata)){
 return   true;
}else{
    return false;
}
}

function checkifrequested($email, $tel)
{
global $conn;
$today=date('Y-m-d');
$getdata=mysqli_query($conn,"select * from request_quotation where client_email='$email' or client_tel='$tel' and date (date_requested)='$today'");
    if(mysqli_num_rows($getdata)>0){
        return true;
    }else{
        return false;
    }
}
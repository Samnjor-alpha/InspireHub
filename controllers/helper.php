<?php
//const EMAIL_USE_SMTP = true;
//const EMAIL_SMTP_HOST = "mail.inspirehub.co.ke";
//const EMAIL_SMTP_AUTH = true;
//const EMAIL_SMTP_USERNAME = "applications@inspirehub.co.ke";
//const EMAIL_SMTP_PASSWORD = "Inspire@2023";
//const EMAIL_SMTP_PORT = 465;
//const EMAIL_SMTP_ENCRYPTION = "tsl";


function quotationid(){
    $ref="QTD";
    $new_ref = $ref.mt_rand(0,100900);

    return  checkifrefexists($new_ref);
}
function applicationid(){
    $ref="ATT";
    $new_ref = $ref.mt_rand(0,100900);

    return  checkifattrefexists($new_ref);
}
function checkifattrefexists($new_ref){
    global $conn;
    $select = mysqli_query($conn,"select * from attachments where appId='$new_ref'");

    if(mysqli_num_rows($select)>0)
    {
        return applicationid();
    }
    else
    {
        return $new_ref;
    }

}
function checkifrefexists($new_ref){
    global $conn;
    $select = mysqli_query($conn,"select * from request_quotation where quote_id='$new_ref'");

    if(mysqli_num_rows($select)>0)
    {
        return quotationid();
    }
    else
    {
        return $new_ref;
    }

}
function checkifemailexists($email)
{
global $conn;
$getdata=mysqli_query($conn,"select * from subscribers where email='$email'");
if (mysqli_num_rows($getdata)>0){
    return true;
}else{
    return false;
}
}
function addsubscriber($email)
{
date_default_timezone_set('Africa/Nairobi');
    global $conn;
    $today =date("Y-m-d H:i:s");
    $addmail="insert into subscribers set email='$email',sub_date='$today'";
    if (mysqli_query($conn,$addmail)){
        return true;
    }else{
        return false;
    }
}
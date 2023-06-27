<?php
require 'vendor/autoload.php';

use AfricasTalking\SDK\AfricasTalking;

function sendnotifysms($tel,$name)
{
    $username = 'demakyd';
    $apiKey   = '6a7d1338d354f0e5d164ae0aa2c0177188b530bad402ad4842af1564563bcc04'; // use your sandbox app API key for development in the test environment
    $AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
    $sms      = $AT->sms();
    $msg=composeremindsms($name);
// Use the service
    try {
        $result = $sms->send([
            'to' => $tel,
            'message' => $msg
        ]);
        return true;
    }catch (Exception $e) {
        return false;
    }

}

function composeremindsms($name)
{
    return "Dear ".$name.", .We are pleased to inform you that we have approved your application for attachment at INSPIRE HUB.";
}

$attaches=mysqli_query($conn,"select * from attachments order by ADate DESC ");
function getattachmentfile($attFile)
{
    if (empty($attFile)) {
        return "Attachment Letter :N/A";
    } else {
        $previewLink = '<a href="' .BASE_URL.$attFile . '" target="_blank">Preview Attachment Letter</a>';
        return $previewLink;
    }
}

function attastatus($status) {
    if ($status==0){

        return "<span class='badge badge-warning'>UnAttended</span>";
    }elseif($status==1){
        return "<span class='badge badge-danger'>Rejected</span>";
    }elseif($status==2){
        return "<span class='badge badge-success'>Accepted</span>";
    }
}

function getapplTel(mixed $appid)
{
  global $conn;
  $sql=mysqli_query($conn,"select tel from attachments where appId='$appid'");
  return mysqli_fetch_assoc($sql)['tel'];
}

function getappName(mixed $appid)
{
    global $conn;
    $sql=mysqli_query($conn,"select full_names from attachments where appId='$appid'");
    return mysqli_fetch_assoc($sql)['full_names'];

}

if (isset($_GET['accept'])){
    $appid=$_GET['accept'];
    $tel=getapplTel($appid);
    $name=getappName($appid);
    $accept="update attachments set Status='2' where appId='$appid'";
    if (mysqli_query($conn,$accept)){
        sendnotifysms($tel,$name);
        header('location:applications.php');
    }
}elseif (isset($_GET['reject'])){
    $appid=$_GET['reject'];
    $accept="update attachments set Status='1' where appId='$appid'";
    if (mysqli_query($conn,$accept)){
        header('location:applications.php');
    }
}function calculateMonthPeriod($startDate, $endDate)
{
    // Create DateTime objects for the start and end dates
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);

    // Calculate the difference between the dates
    $interval = $start->diff($end);

    // Get the total number of months in the difference
    $months = ($interval->y * 12) + $interval->m;

    // Check if there are additional days in the last month
    if ($interval->d > 0) {
        $months += 1;
    }

if ($months>1){
    return $months. ' Months';
}else{
    return $months. ' Month';
}
}

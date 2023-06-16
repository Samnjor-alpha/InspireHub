<?php
$attaches=mysqli_query($conn,"select * from attachments order by ADate DESC ");

function attastatus($status) {
    if ($status==0){

        return "<span class='badge badge-warning'>UnAttended</span>";
    }elseif($status==1){
        return "<span class='badge badge-danger'>Rejected</span>";
    }elseif($status==2){
        return "<span class='badge badge-success'>Accepted</span>";
    }
}
if (isset($_GET['accept'])){
    $appid=$_GET['accept'];
    $accept="update attachments set Status='2' where appId='$appid'";
    if (mysqli_query($conn,$accept)){
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

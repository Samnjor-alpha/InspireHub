<?php
$getreports=mysqli_query($conn,"select * from reports order by id desc limit 5");
function getclients(){
    global $conn;

    $getdata=mysqli_query($conn,"select count(*) as totalclients from clients");

    return mysqli_fetch_assoc($getdata)['totalclients'];
}
function getusers(){
    global $conn;

    $getdata=mysqli_query($conn,"select count(*) as totalusers from admins");

    return mysqli_fetch_assoc($getdata)['totalusers'];
}
function getsubscribers(){
    global $conn;

    $getdata=mysqli_query($conn,"select count(*) as totalusers from subscribers");

    return mysqli_fetch_assoc($getdata)['totalusers'];
}
function getquotations(){
    global $conn;

    $getdata=mysqli_query($conn,"select count(*) as requests from request_quotation");

    return mysqli_fetch_assoc($getdata)['requests'];
}
function getapplications(){
    global $conn;

    $getdata=mysqli_query($conn,"select count(*) as applications from attachments where Status='0'");

    return mysqli_fetch_assoc($getdata)['applications'];
}
function getreports(){
    global $conn;

    $getdata=mysqli_query($conn,"select count(*) as reports from reports");

    return mysqli_fetch_assoc($getdata)['reports'];
}
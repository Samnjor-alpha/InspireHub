<?php
$prospects=[];
$reports=[];
if (isset($_GET['id'])){
    $rid=$_GET['id'];
    $prospectssql = "select * from prospects where report_id='$rid'";
    if ($results = $conn->query($prospectssql)) {
        $prospects = $results->fetch_all(MYSQLI_BOTH);
    }
    $reportssql = "select * from reports where id='$rid'";
    if ($results = $conn->query($reportssql)) {
        $reports = $results->fetch_object();
    }
}

function checkreport($rid): bool
{
    global $conn;
    $getdata=mysqli_query($conn,"select * from reports where id='$rid'");
    if (mysqli_num_rows($getdata)>0){
        return true;
    }else{
        return false;
    }
}
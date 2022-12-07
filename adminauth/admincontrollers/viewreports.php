<?php
$reports=mysqli_query($conn,"select * from reports order by id desc");
function enabledelete($date){
    $today=date('Y-m-d');
    $datee=date('Y-m-d',strtotime($date));
    if ($datee==$today){
        return true;
    }else{
        return false;
    }

}
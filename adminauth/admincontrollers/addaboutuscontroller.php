<?php
$getaboutus=mysqli_query($conn,"select * from aboutus");
if (mysqli_num_rows($getaboutus)>0){
    $row=mysqli_fetch_assoc($getaboutus);
}
function getaboutimage($id){
    global $conn;
    $getdata=mysqli_query($conn,"select image  from aboutus where id ='$id'");
    return mysqli_fetch_assoc($getdata)['image'];
}
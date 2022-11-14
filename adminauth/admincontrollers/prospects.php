<?php
if (isset($_GET['id'])){
    $rid=$_GET['id'];
    $prospects = mysqli_query($conn,"SELECT * FROM prospects where report_id='$rid'");

}
function getcompanyname($id){

    global $conn;
    $sql = mysqli_query($conn,"SELECT company FROM prospects where id='$id'");
    return mysqli_fetch_assoc($sql)['company'];
}
<?php
if (isset($_GET['id'])){
    $rid=$_GET['id'];
    $prospects = mysqli_query($conn,"SELECT * FROM prospects where report_id='$rid'");

}else{
    $prospects = mysqli_query($conn,"SELECT * FROM prospects where status='0' group by contact_person");
}
function getcompanyname($id){

    global $conn;
    $sql = mysqli_query($conn,"SELECT company FROM prospects where id='$id'");
    return mysqli_fetch_assoc($sql)['company'];
}
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
function getprospectid($id){
    global $conn;
    $getdata=mysqli_query($conn,"select id from prospects where contact_person='$id'");
    return mysqli_fetch_assoc($getdata)['id'];
}
if (isset($_GET['prospect'])){
    if (!empty($_GET['prospect'])){
        $id=$_GET['prospect'];
        $pid=getprospectid($_GET['prospect']);
        $prospects = mysqli_query($conn,"SELECT * FROM prospects where contact_person='$id'");
        $engagements=mysqli_query($conn,"select * from engagements where prospect_id='$pid'");
        if (mysqli_num_rows($prospects) > 0){
            $row=mysqli_fetch_assoc($prospects);

        }else{
            header('Location:clients.php');
        }
    }
}
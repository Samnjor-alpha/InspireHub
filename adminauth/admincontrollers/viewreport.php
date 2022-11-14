<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $reportid= $_GET['id'];
    $report=mysqli_query($conn,"select * from reports where id='$reportid'");
    $engagements=mysqli_query($conn,
        "select * from  engagements inner join prospects p  where p.report_id='$reportid' and engagements.prospect_id=p.id");
$rowreport=mysqli_fetch_assoc($report);
    $notes=mysqli_query($conn,
        "select * from  engagements inner join prospects p  where p.report_id='$reportid' and engagements.prospect_id=p.id");




} else {
    header('Location:addreports.php');
}
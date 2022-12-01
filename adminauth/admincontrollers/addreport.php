<?php
if (isset($_POST['report_init'])){

    $rtitle=$_POST['title'];
    $objectives=htmlentities($_POST['editor2'], ENT_COMPAT);
    $preparedby=preparedby($_SESSION['adminID']);
    $date=date("Y-m-d H:i:s");

    if (!empty($rtitle)||!empty($objectives)||!empty($preparedby)) {

        $add="insert into reports set rprt_title='$rtitle',
                        objectives='$objectives',
                        prepared_by='$preparedby',
                        created_at='$date'";
        if (mysqli_query($conn,$add)){
            $reportid = mysqli_insert_id($conn);

            foreach ($_POST['comp_name'] as $key => $value) {
                $company = $value;
                $contact = $_POST['contact_name'][$key];
                $datem = date('Y-m-d',strtotime($_POST['date_met'][$key]));
                $sql = mysqli_query($conn,"INSERT INTO prospects set company='$company',contact_person='$contact',meet_date='$datem',report_id='$reportid'");


            }
            $location="engagements.php?id=".$reportid;
            echo "<script>
toastr.info('Created successfully.Fill engaments report to finish report','Created Report');
window.location.href='$location';
</script>";
        }
    }
}

if (isset($_POST['report_update'])){

    $rtitle=$_POST['title'];

    $objectives=htmlentities($_POST['editor2'], ENT_COMPAT);
    $preparedby=preparedby($_SESSION['adminID']);
    $date=date("Y-m-d H:i:s");

    if (!empty($rtitle)||!empty($objectives)||!empty($preparedby)) {

        $add="update  reports set rprt_title='$rtitle',
                        objectives='$objectives',
                        prepared_by='$preparedby'
                        where id='".$_GET['id']."'";
        if (mysqli_query($conn,$add)){
            $reportid =$_GET['id'];

            foreach ($_POST['comp_name'] as $key => $value) {
                $company = $value;
                $contact = $_POST['contact_name'][$key];
                $pid=$_POST['pros_id'][$key];
                $datem = date('Y-m-d',strtotime($_POST['date_met'][$key]));
                $sql = mysqli_query($conn,"update prospects set company='$company',contact_person='$contact',meet_date='$datem' where id='$pid'");


            }
            $location="engagements.php?id=".$reportid;
            echo "<script>
toastr.info('Updated successfully.','Report Updated');
window.location.href='$location';
</script>";
        }
    }
}
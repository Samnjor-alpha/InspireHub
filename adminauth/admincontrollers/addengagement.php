<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $reportid= $_GET['id'];
} else {
    header('Location:addreports.php');
}
$today=date('Y-m-d H:i:s');

if (isset($_POST['saveprospects'])) {
    $pid = $_POST['cid'];
    $comments = $_POST['comment'];
    $take = implode(',', $_POST['take']);
    $movs = implode(',', $_POST['mov']);
    $notes = implode(',', $_POST['notes']);

    if (is_null($pid) || is_null($comments)) {
        echo "<script>
toastr.error('Select a company to fill the engagements');
        </script>";
    } else {


        foreach ($_POST['comment'] as $k => $comments) {
            if (!empty($comments)) {

                if (!is_array($comments)) {
                    if ($conn->query("insert into engagements
                                            set prospect_id='$pid',
                                                comment='$comments',
                                                mov='$movs',
                                                take='$take',
                                                notes='$notes',
                                                date_submitted='$today'
                                                            ")) {

                        $commentsID = $conn->insert_id;
                    }
                }


            }
            echo"<script>
toastr.success('Engagements for ".getcompanyname($pid)." added successfully');

</script>";
        }
    }
}

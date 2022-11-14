<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
include '../admincontrollers/viewreport.php';
include '../admincontrollers/prospects.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <?php include '../adminstyles/css.php' ?>
    <style>
        .row-title {
            width: 100%;
            padding: 20px 0 20px 20px;
            background: #075f96;
            color: #fff;
            font-size: 13px;
            font-weight: bold;
            margin: auto;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <?php include '../adminbars/topbar.php' ?>


    <!-- Main Sidebar Container -->
    <?php include "../adminbars/sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Overview</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Overview</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <h4>Reports</h4>
                <div class="row">
                    <?php include '../adminbars/reportsbar.php' ?>
                    <div class="col-7 col-sm-9">
                        <?php include '../adminbars/addreportbar.php'?>
                        <div class="mt-3">

                            <div class="row-title text-center">BUSINESS DEVELOPMENT REPORT</div>
                            <div class="offset-9 col-3 mt-3">
                                Date : <?php echo date('D,d.M.Y') ?>
                            </div>
                            <div class="col-5 mt-2 mb-3">
                                <p>TO: THE DIRECTOR, SUPPORT</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">OBJECTIVES OF THE REPORT</h6>
                            <div>
                                <?php echo html_entity_decode($rowreport['objectives']) ?>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">
                                MARKETING ENGAGEMENTS AS FROM  8TH NOVEMBER.</h6>
                            <div>
                                <div class="col-md-12">
                                    <table id="example" class="table table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Company</th>
                                            <th>Contact Person</th>
                                            <th>Comments</th>
                                            <th>Take</th>
                                            <th>MOV</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $i = 1;
                                        while($rowen=mysqli_fetch_assoc($engagements)){?>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= getcompanyname($rowen['prospect_id']) ?></td>
                                            <td><?=  $rowen['contact_person']?></td>
                                            <td><?= $rowen['comment']?></td>
                                            <td><?= $rowen['take']?></td>
                                            <td><?= $rowen['mov'] ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                        } ?>

                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                        <div class="mt-3">
                            <h6>Notes:</h6>
                            <div class="col-md-12">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company</th>
                                        <th>Notes</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    while($rown=mysqli_fetch_assoc($notes)){?>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= getcompanyname($rown['prospect_id']) ?></td>
                                            <td><?= $rown['notes'] ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>


</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php include '../adminstyles/scripts.php';
include '../admincontrollers/addengagement.php';
?>
<script>


    function add_row() {
        $rowno = $("#employee_table tr").length;
        $rowno = $rowno + 1;
        $("#employee_table tr:last").after("<tr style='border-top: 1px solid #ccc; margin-top:0px; padding-top:0px;float: left;' id='row" + $rowno + "'>" +
            "<td><h3>Take </h3><textarea class='form-control'  name='take[]' rows='4' cols='50'></textarea>" +
            "</td>" +
            "<td>" +
            "<input type='button' value='X' class='col2-buttonX' onclick=delete_row('row" + $rowno + "')><td>" +
            "<input type='button' value='+ Add MOV' class='col2-button' onclick='add_indicator();'></td></tr>");
    }

    function delete_row(rowno) {
        $('#' + rowno).remove();
    }


    function add_indicator() {
        $rowno_ind = $("#employee_table_ind tr").length;
        $rowno_ind = $rowno_ind + 1;
        $("#employee_table tr:last").after("<tr style='border-top: 1px solid #ccc; margin-top:5px; padding-top:0px;float: left; color:#000;' id='row_ind" + $rowno_ind + "'>" +
            "<h3>M.o.v</h3>" +
            "<td style='font-weight:bold;'>Means Of Verification<br><br>" +
            "<select type='text'  id='tags' class='form-control' name='mov[]' multiple>" +

            "<option>Called</option>" +
            "<option>Visited</option>"+
            "</select>" +
            "</td>" +
            "<td><input type='button' value='X' class='col2-buttonX' onclick=delete_row_ind('row_ind" + $rowno_ind + "')></td>" +
            "<td><input type='button' value='+ Add Notes' class='col2-button' onclick='add_activity();'>" +
            "</td></tr>");
    }

    function delete_row_ind(rowno) {
        $('#' + $rowno).remove();
    }


    function add_activity() {
        $row_act = $("#employee_table_act tr").length;
        $row_act = $row_act + 1;
        $("#employee_table tr:last").after("<tr style='border-top: 1px solid #ccc; margin-top:0px; padding-top:0px;float: left;' id='row_act" + $row_act + "'><td>" +
            "<label>Notes</label></td>" +
            "<td><textarea  name='notes[]' class='form-control' rows='3' cols='50'></textarea></td></tr>");
    }

    function delete_row_act(row_act) {
        $('#' + $row_act).remove();
    }


    function add_ver() {
        $row_ver = $("#employee_table_ver tr").length;
        $row_ver = $row_ver + 1;
        $("#employee_table tr:last").after("<tr style='border-top: 1px solid #ccc; margin-top:0px; padding-top:0px;float: left;' id='row" + $row_ver + "'>" +
            "<td><label>Text:</label></td><td><textarea  name='name[]' rows='7' cols='50'> </textarea></td><td><label>Upload Files:</label></td><td><input type='file' id='myFile' name='filename'></td><td><input type='button' value='X' class='col2-buttonX' onclick=delete_row_ver('row" + $row_ver + "')></td></tr>");
    }

    function delete_row_ver(row_ver) {
        $('#' + $row_ver).remove();
    }


    function add_row_outcome() {
        $rowout = $("#employee_table_outcome tr").length;

        $rowout = $rowout + 1;


        $("#employee_table tr:last").after("<tr style='border-top: 1px solid #ccc; margin-top:0px; padding-top:0px;float: left;' id='row_out" + $rowout + "'>" +
            "<td><h3>Comment</h3>" +
            "<textarea  class='form-control' name='comment[]' rows='4' cols='50'></textarea>" +
            "</td>" +
            "<td>" +
            "<input type='button' value='X' class='col2-buttonX' onclick=delete_row_out('row_out" + $rowout + "')>" +
            "<td>" +
            "<input type='button' onclick='add_row();' value='+ Add Take' class='col2-button'></td></tr>");
    }

    function delete_row_out(rowno) {
        $('#' + rowno).remove();
    }






</script>


</body>
</html>

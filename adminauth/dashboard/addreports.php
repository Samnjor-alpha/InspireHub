<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <?php include '../adminstyles/css.php' ?>
    <style>
        .row {
            width: 100%;
            padding: 20px 0 20px 20px;
            border-bottom: 1px solid #ccc;
            font-size: 12px;
        }




        .col2-buttonX {
            background: #c8060f;
            color: #fff;
            border: none;
            padding: 6px;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 150%;
        }

        tr {
            padding-top: 30px;
            float: left;
            width: 100%;
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
                            <h6 class="text-center"><u>Business Development Report</u></h6>
                            <form method="POST" action="">

                                <div class="row form-group">
                                    <div class="col-3"><label id="title">Title:</label></div>
                                    <div class="col-6"><input type="text" id="title" name="title" class="form-control" placeholder="Title"/></div>
                                </div>




                                <div class="row form-group">
                                    <div class="col-3"><label for="tags">Objectives</label></div>
                                    <div class="col-8">
                                        <textarea id="tags" name="editor2"></textarea>
                                    </div>
                                </div>



                                    <div class="row">
                                        <div class="col-3"><label>Prospect:</label></div>
                                        <div class="col-6">

                                            <label>Company</label>
                                            <input id="" name="comp_name[]" class="form-control" placeholder="Company/Organization"/>
                                            <label>Contact Person:</label>
                                            <input class="form-control" id="" name="contact_name[]" placeholder="contact Person">
                                            <label>Date</label>
                                            <input type="date" id=""  class="form-control" name="date_met[]">
                                        </div>
                                    </div>
                                <div class="row">
                                        <table id="employee_table" align=left>

                                            <tr id="row1">

                                            </tr>
                                        </table>


                                        <input type="button" onclick="add_row();" value="+ Add Another prospect" class="btn btn-sm bg-dark">

                                    </div>


                                <div class="text-center">
                                    <button name="prj_init" style="width:20%; height:50px; margin-top:20px; background:#075f96; color:#fff; border:none;">Start Report</button>
                                </div>



                            </form>
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
<?php include '../adminstyles/scripts.php' ?>
<script>

    function add_row() {
        $rowno = $("#employee_table tr").length;
        $rowno = $rowno + 1;
        $("#employee_table tr:last").after("<tr style='margin-top:10px; padding-top:10px;' id='row" + $rowno + "'>" +
            "<td style='width:50%;padding-left:3.5%;'>" +
            "<br>" +
            "<label style='position: relative;top: -52px;'>Prospect:</label>" +
            "</td>" +
            "<td>" +
            "<br> <label>company Name</label>" +
            
            "<input id='' name='comp_name[]' class='form-control' placeholder='Company/Organization'>" +
            "<label>Contact Person:</label>" +
            "<input  name='contact_name[]' class='form-control'  placeholder='Contact person'><br>" +
            "<label>Date</label><input type='Date' class='form-control' id='' name='date_met[]' placeholder='Date' />" +
            "</td>" +
            "<td style='padding-left:8%;'>" +
            "<input type='button' value='X' class='col2-buttonX' onclick=delete_row('row" + $rowno + "')></td></tr>");
    }

    function delete_row(rowno) {
        $('#' + rowno).remove();
    }


</script>
</body>
</html>

<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
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
        select[multiple], select[size] {
            height: 200px;
            width: 150%;
            position: relative;
            left: -20%;
        }

        .row {
            width: 100%;
            padding: 20px 0 20px 20px;
            border-bottom: 1px solid #ccc;
            font-size: 12px;
        }

        .col1 {
            width: 50%;
            float: left;
        }

        .col2 {
            width: 50%;
            float: left;
            font-size: 12px;
            padding-left: 3%;
        }

        .col3 {
            width: 20%;
            float: left;
        }

        .col4 {
            width: 40%;
            float: left;
        }

        h3 {
            font-weight: bold;
            margin: 0 0 20px;
            font-size: 11.5px;
            color: #000;
        }

        .input-form {
            float: left;
            margin-bottom: 10px;
            width: 100%;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            border: none;
            padding-bottom: 22px;
        }

        .col02 {
            width: 30%;
            float: left;
            padding: 0 0 5% 0;
        }

        .col02-tab-text {
            width: 70%;
            float: left;
            padding: 0 0 5% 0;
            color: #000;
        }

        .col02-tab-button {
            width: 20%;
            float: left;
            padding: 0 0 5% 0;
        }

        .col2-button {
            background: #414141;
            color: #fff;
            border: none;
            padding: 6px;
            font-weight: bold;
        }

        .col3-button {
            background: Yellow;
            color: #000;
            border: none;
            padding: 6px;
            font-weight: bold;
        }

        .col2-buttonX {
            background: #c8060f;
            color: #fff;
            border: none;
            padding: 6px;
            font-weight: bold;
        }

        .col0_2 {
            width: 30%;
            height: 10px;
            float: left;
            padding: 10px 0 2% 2%;
            background: #e8e8e8;
        }

        select {
            width: 40%;
            height: 30px;
            font-size: 12px;
            background-color: transparent;
            border: #ccc solid 1px;
            padding: 0 1em 0 0;
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            cursor: inherit;
            line-height: inherit;
            color: #000;
            width: 92%;

        }

        .row-title {
            width: 100%;
            padding: 20px 0 20px 20px;
            background: #075f96;
            color: #fff;
            font-size: 13px;
            font-weight: bold;
            margin: auto;
        }

        /* RESET */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* STYLING */
        .container1 {

            color: #a2a2a2;
            font-family: "Nunito Sans", Arial, Helvetica, sans-serif;
        }

        .tabs-container {
            width: 100%;
            margin: auto;
        }

        /* Style the tabs */
        .tabs {
            margin-bottom: 28px;
            display: flex;
            margin-right: 20px;
        }

        .tabs a {
            cursor: pointer;
            padding: 12px 24px;
            text-align: center;
            font-weight: bold;
            transition: background 0.1s, color 0.1s;
            background: #075f96 !important;
            color: #fff;
            margin-left: 15px;
        }


        /* Change background color of tabs on hover */
        .tabs a:hover {
            background: linear-gradient(145deg, #f4f4f4, #cecece);
            color: #888;
        }

        .darkmode .tabs a:hover {
            background: #141414;
            color: #bbb;
        }

        /* Styling for active tab */
        .tabs a.active {
            color: #fff;
            cursor: default;
            padding: 14px 22px 10px 26px;
            background: #027a14 !important;
        }

        .darkmode .tabs a.active {
            background: #1A1B1F;
            color: #fff;
        }


        /* Style the tab content */
        .tabcontent {
            padding: 18px;
            display: none;
        }


        .content .active {
            display: block;
        }

        .tabcontent p {
            margin-bottom: 12px;
        }

        .tabcontent p:last-child {
            margin-bottom: 0;
        }

        .tabcontent .read-more-link a {
            color: #626262;
            text-decoration: none;
            font-size: 0.85em;
            font-weight: bold;
        }

        .darkmode .tabcontent .read-more-link a {
            color: #d4d4d4;
        }

        .icon {
            padding-left: 8px;
            font-size: 16px;
        }

        /* THE DARKMODE SWITCH */
        .dark-mode-switch {
            position: absolute;
            top: 16px;
            right: 16px;
        }

        .dark-mode-switch .switch {
            /*     margin-left: 4px; */
        }

        .switch-label {
            cursor: pointer;
            font-size: 0.85em;
        }

        /* the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 44px;
            height: 22px;
            margin-left: 4px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #1A1B1F;
            transition: .2s;
            box-shadow: 2px 2px 3px #ffffff,
            -2px -2px 3px #bebebe;
        }

        .darkmode .slider {
            box-shadow: 2px 2px 3px #34353a,
            -2px -2px 3px #000104;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 2px;
            background: #9294b8;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #f4f4f4;
        }

        input:checked + .slider:before {
            transform: translateX(21px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 11px;
        }

        .slider.round:before {
            border-radius: 50%;
        }


        /*==============================*/
        .small-screen {
            display: none;
            background-color: #f4f4f4;
            height: 100vh;
            color: #a2a2a2;
            font-family: "Nunito Sans", Arial, Helvetica, sans-serif;
        }

        .darkmode .small-screen {
            background-color: #1A1B1F;
            color: #8a8a8a;
        }

        .small-screen-content {
            width: 70%;
            margin: auto;
        }

        @media only screen and (max-width: 600px) {
            .container {
                display: none;
            }

            .small-screen {
                display: flex;
            }

            .tabcontent {
                display: block;
            }
        }


        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700;
            color: #000;
        }

        .table > caption + thead > tr:first-child > td, .table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > td, .table > thead:first-child > tr:first-child > th {
            border-top: 0;
            color: #000;
        }

        td {
            padding: 30px;
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

<form action="" method="post">
    <div class="row-title">MARKETING ENGAGEMENTS</div>

    <div class="row" style="padding-left:5%;">
        <div class="offset-3 col-4">

            <select class="form-select form-control" onchange='this.form.submit()' name="prospects" id="prospects">
                <option>Select company to fill</option>
                <?php foreach ($prospects as $ki=>$company) {
                    $xi = $ki+1;
                    $id =$company['id']; ?>

                    <option value="<?php echo $id ?>"><?php echo$company['company'] ?></option>


                <?php } ?>
            </select>
        </div>


    </div>

    <div class="row">


        <?php

        if (isset($_POST['prospects'])){?>
            <div id="container1" class="container1">
                <h3 class="text-center text-primary">Filling Engagements for: <?php echo  getcompanyname($_POST['prospects']) ?></h3>
                <div class="col02-tab-text">
                    <table id="employee_table_outcome" align=center>
                        <input name="cid" type="hidden" value="<?php echo $_POST['prospects']?>">
                        <tr id="row_out">

                    </table>


                </div>

                <div class="col02-tab-button">


                </div>

                <table id="employee_table_outcome" align=center>
                    <tr id="row_out">

                </table>


                <table id="employee_table_ind" align=center>
                    <tr id="row_ind">

                </table>

                <table id="employee_table_ver" align=center>
                    <tr id="row_act">

                </table>


                <table id="employee_table_act" align=center>
                    <tr id="row_act">

                </table>

                <table id="employee_table" align=center>

                    <tr id="row1">
                    </tr>
                </table>


                <input type="button" onclick="add_row_outcome();" value="+ Add a New Comment"
                       class="col2-button">
            </div>


            <div class="row">
                <input type="submit" name="saveprospects" value="Save Engagements"
                       style="width:20%; height:50px; background:#027a14 !important; color:#fff; border:none;">

            </div>



        <?php }else{?>
            <h3 class="text-center text-danger">*Select company to fill engagements:</h3>
        <?php } ?>
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

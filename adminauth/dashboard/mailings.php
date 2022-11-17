<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
include '../admincontrollers/subscribers.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subscribers</title>
    <?php include '../adminstyles/css.php' ?>

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

                <h4>Mailing  List</h4>
                <div class="row">
                    <?php include '../adminbars/mailistbar.php' ?>
                    <div class="col-7 col-sm-9">

                        <div class="mt-3">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $i=1;
                                    while ($rows=mysqli_fetch_assoc($getsubscribers)){ ?>
                                        <tr>
                                            <td><?= $i ?></td>

                                            <td><i class="fas fa-envelope-square"></i> : <?= $rows['email'] ?>
                                           </td>

                                            <td><i class="fas fa-calendar-day"></i> : <?= date('D, d.M.Y',strtotime($rows['sub_date'])) ?></td>

                                        </tr>
                                        <?php  $i++;
                                    }?>
                                    </tbody>
                                </table>
                            </div>

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
include '../admincontrollers/addreport.php';
?>
<script>

       CKEDITOR.config.height='80px';


</script>
</body>
</html>

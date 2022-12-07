<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
include '../admincontrollers/viewreports.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

                        <h4>Reports</h4>
                        <div class="row">
                            <?php include '../adminbars/reportsbar.php' ?>
                            <div class="col-md-9 col-sm-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Reports</h3>


                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example" class="table table-striped " style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Report Title</th>
                                                        <th>Prepared By</th>
                                                        <th>Date prepared</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $i=1;


                                                    while ($row=mysqli_fetch_assoc($reports)) {?>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td><?= $row['rprt_title'] ?></td>
                                                        <td><?= $row['prepared_by']; ?></td>
                                                        <td><?php checkreportdate($row['created_at']); ?></td>
                                                        <td><a href="report.php?id=<?= $row['id']?>"><i class="fas fa-eye" title="View"></i></a>|
                                                            <a href="addreports.php?id=<?= $row['id']?>"><i class="fas fa-edit" title="Edit"></i></a>
                                                            <?php if (enabledelete($row['created_at'])){ ?>
                                                            |
                                                            <a href="?delete=<?= $row['id']?>"><i class="fas fa-trash-alt text-danger    " title="Delete"></i></a>
<?php } ?>
                                                        </td>
                                                    </tr>
<?php  $i++;} ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>

                                        <!-- /.card -->


                                        <!-- /.card -->
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
<?php include '../admincontrollers/addreport.php'?>
<!-- REQUIRED SCRIPTS -->
<?php include '../adminstyles/scripts.php' ?>

</body>
</html>

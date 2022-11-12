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
                <div class="page-contents mt-2">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>Clients</p>
                                </div>
                                <div class="icon">

                                    <i class="ion ion-ios-people"></i>
                                </div>
                                <a href="clients.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>5</h3>

                                    <p>Users</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-stalker"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">

                                <div class="inner">
                                    <h3>44</h3>

                                    <p>Subscribers</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Quot. Requests</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Reports</h3>


                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Report Title</th>
                                            <th>Prepared By</th>
                                            <th>Date prepared</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>KODI Represent</td>
                                            <td>Lattifah Milkah</td>
                                            <td>Today</td>
                                            <td><button class="btn  btn-sm btn-success">View</button></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <!-- /.card -->


                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box mb-3 bg-primary">
                                <span class="info-box-icon">
                                <i class="fas fa-mouse-pointer"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Daily Visits</span>
                                    <span class="info-box-number">92,050</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <div class="info-box mb-3 bg-success">
                                <span class="info-box-icon">
                                <i class="fas fa-mouse-pointer"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Monthly Visits</span>
                                    <span class="info-box-number">112,050</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>

                            <div class="info-box mb-3 bg-info">
                                <span class="info-box-icon"><i class="fas fa-file-pdf"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Reports</span>
                                    <span class="info-box-number">23</span>
                                </div>
                                <!-- /.info-box-content -->
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
<?php include '../adminstyles/scripts.php' ?>

</body>
</html>

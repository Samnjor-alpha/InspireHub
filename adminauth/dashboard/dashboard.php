<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
include '../admincontrollers/admincontroller.php';
include 'getCounter.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
   <?php include '../adminstyles/css.php' ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.tick').ticker({
                incremental: getCounter,
                separators: true,
                autostart: true,
                delay: 500
            });
        });

        var counterValue = <?php echo $counterValue; ?>; // This is the counter retrieved from file.
        var displayCounter = counterValue; // This is the counter currently displayed in screen.
        function getCounter() {
            if (displayCounter < counterValue) {
                displayCounter++;
            }
            return displayCounter;
        }

        function refreshCounter() {
            jQuery.ajax({
                url: 'getCounter.php',
                success: function(result) {
                    counterValue = parseInt(result);
                    setTimeout(refreshCounter, 3000); // Refresh counter every 3 seconds.
                },
                cache: false
            });
        }
        refreshCounter();
    </script>
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
                                    <h3><?= getclients()?></h3>

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
                                    <h3><?= getusers() ?></h3>

                                    <p>Users</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-stalker"></i>
                                </div>
                                <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">

                                <div class="inner">
                                    <h3><?= getsubscribers() ?></h3>

                                    <p>Subscribers</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="mailings.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= getquotations()?></h3>

                                    <p>Quot. Requests</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <a href="quotationrequests.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                                    <table id="example" class="table table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Report Title</th>
                                            <th>Prepared By</th>
                                            <th>Date prepared</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i=1;


                                        while ($row=mysqli_fetch_assoc($getreports)) {?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row['rprt_title'] ?></td>
                                                <td><?= $row['prepared_by']; ?></td>
                                                <td><?php checkreportdate($row['created_at']); ?></td>
                                                <td><a href="report.php?id=<?= $row['id']?>" class="btn  btn-sm btn-success">View</a></td>
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
                        <div class="col-md-4">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box mb-3 bg-primary">
                                <span class="info-box-icon">
                                <i class="fas fa-mouse-pointer"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Visits </span>
                                    <span class="info-box-number"><p class="tick tick-flip"><?php echo $counterValue; ?></p></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>


                            <div class="info-box mb-3 bg-info">
                                <span class="info-box-icon"><i class="fas fa-file-pdf"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Reports</span>
                                    <span class="info-box-number"><?= getreports() ?></span>
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
<?php include '../adminstyles/scripts.php'; ?>
<script src="../dist/js/jquery.min.js" type="text/javascript"></script>
<script src="../dist/js/jquery.easing.js" type="text/javascript"></script>
<script src="../dist/js/tick.js" type="text/javascript"></script>

</body>
</html>

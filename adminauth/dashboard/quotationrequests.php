<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
include '../admincontrollers/requestcontroller.php'

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
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-user-tie mr-1"></i>
                        Quotation Request
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Full Names</th>
                                    <th>Contacts</th>
                                    <th>Service Request</th>
                                    <th>About Request</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($rowp = mysqli_fetch_assoc($qrequests)): ?>
                                    <tr>
                                        <td><?= $rowp['client_name'] ?></td>
                                        <td><?= $rowp['client_email'] ?><br><?= $rowp['client_tel'] ?></td>
                                        <td><?= $rowp['service_request'] ?></td>
                                        <td><?= $rowp['message'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
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
<?php include '../adminstyles/scripts.php' ?>

</body>
</html>

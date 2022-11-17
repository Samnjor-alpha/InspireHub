<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
include '../admincontrollers/clientscontroller.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clients</title>
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
                        <h1 class="m-0">Clients</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Clients</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">

                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
<?php include '../adminbars/clientsbar.php' ?>
                            <div class="row  mt-2 mb-2">
                                <div class="col-2">
                                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addclient">Add Client</button>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-user-tie mr-1"></i>
                                    Clients
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Industry</th>
                                                <th>Added</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                 <?php
                                 $i=1;
                                 while ($rowc=mysqli_fetch_assoc($getclients)){ ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><i class="far fa-user"></i> : <?= $rowc['names'] ?></td>
                                                <td><i class="fas fa-envelope-square"></i> : <?= $rowc['email'] ?>
                                                    <br>
                                                    <i class="fas fa-phone-square-alt"></i> : <?= $rowc['tel_no'] ?></td>
                                                <td><i class="fas fa-industry"></i> : <?= $rowc['industry'] ?></td>
                                                <td><i class="fas fa-calendar-day"></i> : <?= date('D, d.M.Y',strtotime($rowc['added_at'])) ?></td>
                                                <td><button class="btn btn-sm btn-success">View</button></td>
                                            </tr>
<?php  $i++;
                                 }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </main>



            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>


</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php include '../adminstyles/scripts.php';
include '../adminmodals/addclient.php';
include '../admincontrollers/addclient.php';
?>

</body>
</html>

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

                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user-tie mr-1"></i>
                             Prospects
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>

                                            <th>Company/Name</th>
                                            <th>Contact</th>
                                            <th>Added</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php while ($rowp=mysqli_fetch_assoc($prospects)){ ?>
                                        <tr>
                                            <td><?= $rowp['company'] ?></td>
                                            <td><?= $rowp['contact_person'] ?></td>
                                            <td><?=  date('D, d.M.Y',strtotime($rowp['meet_date']))?></td>
                                            <td><button class="btn btn-sm btn-success">View</button></td>
                                        </tr>
<?php  } ?>
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
?>

</body>
</html>

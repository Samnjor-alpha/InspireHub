<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/applcontrollers.php';
include '../admincontrollers/session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applications</title>
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
                        Attachment Applications
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Full Names</th>
                                    <th>Contacts</th>
                                    <th>Institution</th>
                                    <th>Period</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                while ($rowp = mysqli_fetch_assoc($attaches)): ?>
                                    <tr>
                                        <td><?= $rowp['full_names'] ?></td>
                                        <td><?= $rowp['email'] ?><br><?= $rowp['tel'] ?></td>
                                        <td><?= $rowp['campus'] ?><br><?= $rowp['course'] ?>
                                            <br>
                                           <?= getattachmentfile($rowp['attFile']);?></td>
                                        <td>
                                            Expected Start Date: <?= date('D, d.M.Y', strtotime($rowp['sDate'])) ?><br>
                                            Expected End Date: <?= date('D, d.M.Y', strtotime($rowp['Edate'])) ?><br>
                                            Period Time: <span class="badge badge-info"><?= calculateMonthPeriod($rowp['sDate'], $rowp['Edate']) ?></span>

                                        </td>
                                        <td><?= attastatus($rowp['Status']) ?></td>
                                        <td>
                                            <?php if ($rowp['Status'] == 0): ?>
                                                <a href="applications.php?accept=<?= $rowp['appId'] ?>" title="Accept Applicant" class="text-success"><i class="fas fa-check-circle"></i></a> |
                                                <a href="applications.php?reject=<?= $rowp['appId'] ?>" title="Reject Applicant" class="text-danger"><i class="fas fa-times-circle"></i></a>
                                            <?php elseif ($rowp['Status'] == 1): ?>
                                                <a href="applications.php?accept=<?= $rowp['appId'] ?>" title="Reconsider Applicant" class="text-success"><i class="fas fa-check-circle"></i></a>
                                            <?php endif; ?>
                                        </td>
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
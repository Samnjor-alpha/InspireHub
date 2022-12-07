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
                        <?php include '../adminbars/prospectbar.php' ?>
                        <div class="row  mt-2 mb-2">

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="testimonial-item">
                                            <img src="https://ui-avatars.com/api/?name=<?= $row['company']?>&background=0D8ABC&color=fff" class="testimonial-img" alt="">
                                            <div class="text-center text-justify mt-3">

                                                <h4><i class="fas fa-building"></i> <?= $row['company']?></h4>
                                                <h4><i class="fas fa-phone-square-alt"></i> <?= $row['contact_person']?> </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="offset-2 col-6">

<?php
if (mysqli_num_rows($engagements)>0){

while ($rowe=mysqli_fetch_assoc($engagements)){ ?>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="float-left">Date: <?= date('D,d.M.Y',strtotime($rowe['date_submitted'])) ?></div>
                                        <br>
                                        <div class="mt-2 mb-3 testimonial-item">
                                            <p><?= $rowe['comment'] ?> </p>
                                            <div class="row">
<div class="col-4">
    <h4>Take:</h4> <span><?=$rowe['take'] ?></span>
</div>
                                                <div class="col-4">
                                                   <h4>Mov:</h4> <span><?=$rowe['mov'] ?></span>
                                                </div>
                                                <div class="col-4">
                                                    <h4>Notes: </h4><span><?=$rowe['notes'] ?></span>
                                                </div></div>

                                        </div>
                                    </div>
                                </div>
                                <?php }}else{ ?>
    <p class="text-center text-warning" style="margin-top:20%">No Engagements added</p>

                                <?php } ?>
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

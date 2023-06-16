<?php include 'database/config.php';
include 'adminauth/admincontrollers/addproductcontroller.php'?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>Inspire Hub  Limited</title>
    <?php include 'styles/css.php'?>
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="row">
        <div class="float-left">
            <div class="btn-group">
                <a href="javascript: history.go(-1)" title="Home" class="btn  btn-lg"><i class="text-white fas fa-arrow-left"></i></a>

            </div>
        </div>
        <!-- /.btn-group -->
    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio Details</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <h3>Product Images</h3>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            for($i=1;$i<=$rowcount;$i++)
                            {
                                $row = mysqli_fetch_array($getimages);

                                if($i==1){


                                    ?>
                                    <div class="carousel-item active">
                                        <img src="adminauth/dashboard/uploads/<?php echo $row['images'];?>" class="d-block w-100" alt="..." width="100%" height="400px">
                                    </div>

                                <?php }else{
                                    ?>
                                    <div class="carousel-item">
                                    <img src="adminauth/dashboard/uploads/<?php echo $row['images'];?>" class="d-block w-100" alt="..." width="100%" height="400px">
                                    </div><?php } ?>
                            <?php }  ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>





                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: <?= $rowp['pcateg'] ?></li>

                            <li><strong>Project URL</strong>:<?= getpurl($rowp['purl']) ?></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2 class="text-center">**Features**</h2>
                        <p>
                            <?= html_entity_decode($rowp['pdesc']) ?>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include 'navbars/footer.php' ?>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<?php include 'styles/scripts.php'?>

</body>

</html>
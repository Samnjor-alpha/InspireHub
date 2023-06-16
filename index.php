<?php include 'database/config.php';
include_once "adminauth/dashboard/counter.php";
include 'adminauth/admincontrollers/addproductcontroller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>InspireHub Limited| Home</title>
    <?php include 'styles/css.php'?>
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
<?php include 'navbars/topbar.php' ?>


  </header>
  <!-- ======= Hero Section ======= -->
 <?php include 'layouts/hero.php' ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php include 'layouts/aboutus.php' ?>

    <!-- ======= Clients Section ======= -->
<!--    --><?php //include  'layouts/clients.php'?>


    <!-- ======= Services Section ======= -->
    <?php include 'layouts/services.php' ?>



    <!-- ======= Portfolio Section ======= -->
    <?php include 'layouts/portfolio.php' ?>

    <!-- ======= Counts Section ======= -->
<!--   --><?php //include 'layouts/stats.php'?>

    <!-- ======= Testimonials Section ======= -->
<!--    --><?php //include 'layouts/testimonials.php' ?>

    <!-- ======= Team Section ======= -->
<!--    --><?php //include "layouts/team.php"; ?>
      <?php include "layouts/partners.php" ?>

    <!-- ======= Contact Section ======= -->
    <?php include 'layouts/contactus.php'; ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include 'navbars/footer.php' ?>
  <a aria-label="Chat on WhatsApp" href="https://api.whatsapp.com/send?phone=254715653981&text=Hello%20there%2C%20got%20any%20questions%3F%20Inspire Hub%20is%20here%20to%20serve%20you." class="float" target="_blank">
      <i class="fab fa-whatsapp my-float"></i>
  </a>


  <a href="#quote" class="floating-btn d-lg-none">
      <i class="fas fa-plus"></i>
  </a>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
<?php include 'styles/scripts.php';
   include 'controllers/requestquote.php' ?>

</body>

</html>
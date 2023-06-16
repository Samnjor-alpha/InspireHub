<?php include 'database/config.php';
include 'controllers/applyattachmentcontroller.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apply for Attachment</title>
    <?php include 'styles/css.php'?>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar order-last order-lg-0 fixed-top navbar-expand-lg navbar-dark" style="background-color:#2E3092">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-arrow-left mr-1"></i>
                Back to Main Website
            </a>
            <div class="ms-auto mr-1 p-3">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" alt="" class="img-fluid bg-white logo rounded-2 p-2">
                </a>
            </div>
        </nav>
    </div>


</header>
<!-- ======= Hero Section ======= -->


<main id="main">

    <?php include 'layouts/attachmentform.php' ?>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include 'navbars/footer.php' ?>
<a aria-label="Chat on WhatsApp" href="https://web.whatsapp.com/send?phone=254715653981&text=Hello%20there%2C%20got%20any%20questions%3F%20Inspire Hub%20is%20here%20to%20serve%20you." class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
</a>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<?php include 'styles/scripts.php';
include 'controllers/requestquote.php';
include 'controllers/applyattachment.php';?>

</body>

</html>
<ul class="nav nav-tabs">
    <?php if (isset($_GET['id'])){?>
        <li class="nav-item">
            <a class="nav-link <?php active('addreports.php');?>" href="addreports.php?id=<?php echo $_GET['id'] ?>">Update Report</a>
        </li>

        <li class="nav-item">

            <a class="nav-link <?php active('engagements.php');?>" href="engagements.php?id=<?php echo $_GET['id'] ?>">Market Engaments</a>
        </li>
        <li class="nav-item">

            <a class="nav-link <?php active('viewreport.php');?>" href="viewreport.php?id=<?php echo $_GET['id'] ?>">View Report</a>
        </li>
    <?php }else {?>
        <a class="nav-link <?php active('addreports.php');?>" href="addreports.php">Start Report</a>
    <?php } ?>


</ul>
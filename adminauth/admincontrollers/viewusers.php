<?php
$getusers=mysqli_query($conn,"select * from admins where id!='".$_SESSION['adminID']."'");
//$getusers=mysqli_query($conn,"select * from admins");

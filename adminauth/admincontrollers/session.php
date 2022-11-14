<?php

if (!isset($_SESSION['role'])){
    echo "<script>
alert('Session expired.Logging again');
window.location.href = '../login.php';
</script>";
}

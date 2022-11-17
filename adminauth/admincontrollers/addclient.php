<?php


if (isset($_POST['add_client'])){

    $fname=$_POST['names'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $industry=$_POST['industry'];
    $notes=$_POST['notes'];
if (!empty($fname) || !empty($tel) || !empty($email) || !empty($industry)||!empty($notes)){
if(filter_var($email, FILTER_VALIDATE_EMAIL)===false)
{
echo "<script>
toastr.error('Invalid email format','Invalid email');
</script>";
}elseif(checkclienttel($tel)){
    echo "<script>
toastr.error('Mobile number is associated with client','Phone Number exists');
</script>";
}elseif (checkclientemail($email)){
    echo "<script>
toastr.error('Email account is associated with client','Email exists');
</script>";
}else{
    $sql="INSERT INTO clients set names='$fname',email='$email',industry='$industry',tel_no='$tel',notes='$notes',added_at=NOW()";
    if(mysqli_query($conn,$sql)){
        echo "<script>
toastr.success('Client added successfully','Client added.');
window.location.href='clients.php'
</script>";
    }else{
        echo "<script>
toastr.error('An error occurred ','Error occured');

</script>";
    }


}

}

}
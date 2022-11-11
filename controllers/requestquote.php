<?php
include 'helper.php';
include 'requestcontroller.php';



if (isset($_POST['request'])){
$name=trim($_POST['name'], '');
$email=trim($_POST['email'], '');
$tel=trim($_POST['tel'], '');
$service=trim($_POST['service'], '');
$message=trim($_POST['message'],'');
$quotationid=quotationid();

if (empty($name)||empty($service)||empty($message)||empty($tel)||empty($quotationid)){

    echo "<script>
toastr.error('All fields are required', 'Details required!')

</script>";
}elseif(checkifrequested($email,$tel)){
    echo "<script>
toastr.warning('We have received your request. We shall get in touch with you shortly', 'Received')

</script>";
}
elseif(addquote($name,$email,$tel,$service,$message,$quotationid)){
    echo "<script>
toastr.success('Request was success.Will get in touch', 'Success')

</script>";

}else{
    echo "<script>
toastr.error('An error occured', 'Error')

</script>";
}

}




if (isset($_POST['subscribe'])){
    $email=trim($_POST['email'],'');
    if (empty($email)){
        echo "<script>
toastr.error('Email is required', 'Details required!')

</script>";
    }
elseif(filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
    echo "<script>
toastr.error('Invalid Email', 'Invalid!')

</script>";
    }elseif (checkifemailexists($email)){
        echo "<script>
toastr.info('You are already in our mailinglist', 'Already subscribed')

</script>";
    }elseif (addsubscriber($email)){
        echo "<script>
toastr.success('Subscribed successfully', 'Success');

</script>";
    }


}
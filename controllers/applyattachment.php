<?php





if (isset($_POST['apply'])){
    $fname=trim($_POST['fname'], '');
    $lname=trim($_POST['lname'], '');
    $flname=$fname.' '.$lname;
    $email=trim($_POST['email'], '');
    $tel=trim($_POST['tel'], '');
    $campus=trim($_POST['campus'], '');
    $course=trim($_POST['course'],'');
    $sdate=trim($_POST['sdate'],'');
    $edate=trim($_POST['edate'],'');
    $appid=applicationid();

    if (empty($fname)||empty($lname)
        ||empty($campus)
        ||empty($course)
        ||empty($email)
        ||empty($tel)
        ||empty($appid)){

        echo "<script>
toastr.error('All fields are required', 'Details required!')

</script>";
    }elseif(checkifAttrequested($email,$tel)){
        echo "<script>
toastr.warning('We have received your Application. We shall get in touch with you shortly', 'Received')

</script>";
    }
    elseif(addapplication($appid,$flname,$email,$tel,$campus,$course,$sdate,$edate)){
        notifyapplicant($flname,$email,$appid);
        echo "<script>
toastr.success('Application was success.Will get in touch', 'Success')

</script>";

    }else{
        echo "<script>
toastr.error('An error occured', 'Error')

</script>";
    }

}
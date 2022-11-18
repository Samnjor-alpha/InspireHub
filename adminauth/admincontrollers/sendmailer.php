<?php
if (isset($_POST['sendmail'])) {

$to=implode(',',$_POST['emails']);


    $subject = $_POST['subject'];
    $msg = htmlentities($_POST['email_msg'], ENT_NOQUOTES);

            $mail = getMail();
            $mail->From = EMAIL_SMTP_USERNAME;
            $mail->FromName = "INSPIRE HUB";

    $addresses = explode(',', $to);
    foreach ($addresses as $address) {
         $mail->addBCC($address);
    }
            $mail->AddReplyTo("info@inspirehub.co.ke", "Information");


            $mail->WordWrap = 50;                                 // set word wrap to 50 characters
              // optional name
            $mail->IsHTML(true);                                  // set email format to HTML

            $mail->Subject = $subject;
            $mail->Body    = $_POST['email_msg'];


            if(!$mail->Send())
            {

                echo "
                <script>
                toastr.error('Email not sent.','Email Error');
                </script>
                ";
            }else {
                foreach ($addresses as $address) {
                    if (checkifsubemailexists($address)) {
                        mysqli_query($conn, "update subscribers set status='1' where email='$address'");
                    }else{
                        mysqli_query($conn,"insert into subscribers set email='$address', status='1',sub_date=NOW()");
                    }
                }
                echo "
                <script>
                toastr.success('Email  sent successfully.','Emails sent');
                header.location.href='sendmail.php'
                </script>
                ";
            }




}
<?php
if (isset($_POST['sendmail'])) {

    if (isset($_POST['send_'])) {
        if ($_POST['send_'] == 'all') {
            $to = implode(',', getallmails());
        } elseif ($_POST['send_'] == 'new') {
            $to = implode(',', getnewmails());
        } else {
            $to = explode(',', $_POST['emails']);

        }
    }
    $to = $_POST['emails'];

    $subject = $_POST['subject'];
    $msg = htmlentities($_POST['email_msg'], ENT_NOQUOTES);
//    foreach ($to as $to_add) {
//        echo
//            "<script>
//alert('" . $to_add . "')
//</script>
//        ";
        // name is optional


            $mail = getMail();
            $mail->From = EMAIL_SMTP_USERNAME;
            $mail->FromName = "INSPIRE HUB";
            foreach($to as $to_add){
                $mail->AddAddress($to_add);                  // name is optional
            }
            $mail->AddReplyTo("info@inspirehub.co.ke", "Information");

            $mail->WordWrap = 50;                                 // set word wrap to 50 characters
              // optional name
            $mail->IsHTML(true);                                  // set email format to HTML

            $mail->Subject = "Here is the subject";
            $mail->Body    = "This is the HTML message body <b>in bold!</b>";
            $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

            if(!$mail->Send())
            {
                echo "
                <script>
                toastr.error('Email not sent.','Email Error');
                </script>
                ";
            }else {

                echo "
                <script>
                toastr.success('Email  sent successfully.','Emails sent');
                </script>
                ";
            }




}
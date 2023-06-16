<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';
function checkifAttrequested($email, $tel)
{
    global $conn;
    $today=date('Y-m-d');
    $getdata=mysqli_query($conn,"select * from attachments where email='$email' or tel='$tel'");
    if(mysqli_num_rows($getdata)>0){
        return true;
    }else{
        return false;
    }
}
function addapplication($appId,$flname,$email,$tel,$campus,$course,$sdate,$edate)
{

    global $conn;
    date_default_timezone_set("Africa/Nairobi");
    $today=date("Y-m-d H:i:s");
    $insertdata="insert into attachments set 
                                  appId='$appId',      
                                  full_names='$flname',
                                  email='$email',
                                  tel='$tel',
                                  campus='$campus',
                                  course='$course',
                                  sDate='$sdate',
                                  Edate='$edate',
                                  ADate='$today'";

    if (mysqli_query($conn,$insertdata)){
        return   true;
    }else{
        return false;
    }

}
function getMail(mixed $email): PHPMailer
{
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail = new PHPMailer(true);


    $mail->IsSMTP();
    $mail->SMTPDebug = false;
    $mail->SMTPAuth = EMAIL_SMTP_AUTH;
    $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;
    $mail->Host = EMAIL_SMTP_HOST;
    $mail->Port = EMAIL_SMTP_PORT; // or 587
    $mail->IsHTML(true);
    $mail->Username = EMAIL_SMTP_USERNAME;
    $mail->Password = EMAIL_SMTP_PASSWORD;

    $mail->addAddress($email);
    return $mail;
}
function notifyapplicant($name, $email,$referenceNumber): bool
{
        $mail = getMail($email);

        $output = '<p>Dear ' . $name . ',</p>';
        $output .= '<p>Thank you for submitting your application. We have successfully received it and will review your information shortly.</p>';
        $output .= '<p>In the meantime, if you have any questions or need further assistance, please feel free to contact us.</p>';
        $output .= '<p>We appreciate your interest in our organization and look forward to keeping in touch with you.</p>';
        $output .= '<p>Reference Number: ' . $referenceNumber . '</p>';
        $output .= '<p>Best regards,</p>';
        $output .= '<p>' . EMAIL_NOTIFICATION_FROM_NAME . '</p>';
        $output .= '<br>'; // Add line break before the footer
        $output .= '<p>Visit our website for more information:</p>';
        $output .= '<p>www.inspirehub.co.ke</p>';

        $subject = EMAIL_NOTIFICATION_SUBJECT;
        $body = $output;
        $mail->Subject = $subject;
        $mail->Body = $body;

        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    }

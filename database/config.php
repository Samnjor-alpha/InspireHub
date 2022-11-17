<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_DATABASE = 'inspirehub';
const  BASE_URL='http://localhost/InspireHub/';
const EMAIL_USE_SMTP = true;
const EMAIL_SMTP_HOST = "mail.inspirehub.co.ke ";
const EMAIL_SMTP_AUTH = true;
const EMAIL_SMTP_USERNAME = "noreply@inspirehub.co.ke";
const EMAIL_SMTP_PASSWORD = "@32Ff294%";
const EMAIL_SMTP_PORT = 465;
const EMAIL_SMTP_ENCRYPTION = "ssl";
const EMAIL_NOTIFICATION_CONTENT = "your account was Created successfully.Use this one-time password  to sign in.";
const EMAIL_NOTIFICATION_SUBJECT = "Account Created successfully!!";
const EMAIL_NOTIFICATION_FROM_NAME = "Inspirehub";
const EMAIL_RESET_SUBJECT="Verification";
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
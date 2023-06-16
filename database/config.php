<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_DATABASE = 'inspirehub';
const  BASE_URL='http://localhost/InspireHub/';

const EMAIL_SMTP_HOST = "smtp.gmail.com";
const EMAIL_SMTP_AUTH = true;
const EMAIL_SMTP_USERNAME = "nbmsnoreply@gmail.com";
const EMAIL_SMTP_PASSWORD = "tisrziujhyncmuvc";
const EMAIL_SMTP_PORT = 587;
const EMAIL_SMTP_ENCRYPTION = "tsl";
const EMAIL_NOTIFICATION_CONTENT = "thank you for submitting your application. We have successfully received it and will review your information shortly
    In the meantime, if you have any questions or need further assistance, please feel free to contact us
   We appreciate your interest in our organization and look forward to keeping in touch with you.";

const EMAIL_NOTIFICATION_FROM_NAME = "INSPIREHUB LIMITED";
const EMAIL_NOTIFICATION_SUBJECT="Application Received - Confirmation";

const EMAIL_RESET_SUBJECT="Verification";



$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host     = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cuhcseprincelal2@gmail.com';
    $mail->Password = 'nolcdvxrpoissrfr';
    $mail->SMTPSecure = 'tls';
    $mail->Port     = 587;

    $mail->setFrom('cuhcseprincelal2@gmail.com', 'Support Team');
    //$mail->addReplyTo('reply@example.com', 'SenderName'); 

    // Add a recipient 
    $mail->addAddress($email, $name);

    // Add cc or bcc  

    // Email subject 
    $mail->Subject = 'Welcome to XYZ Company ';

    // Set email format to HTML 
    $mail->isHTML(true);

    // Email body content 
    $mailContent = " 
    <h2>Welcome " . $name . "</h2> 
    <ul>
        <li>Mail: " . $email . "</li>
        <li>Mobile Number : " . $mobile . " </li>
        <li>Message : " . $message . " </li>
    </ul>
    <p>" . $name . ", You will get call back soon!!!</p>";

    $mail->Body = $mailContent;

    // Send email 
    if (!$mail->send()) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header("Location: thankyou.html");   
     }
}

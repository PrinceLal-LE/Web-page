<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $position = $_POST['position'];
    $employmentStatus = $_POST['employmentStatus'];
    $linkedin = $_POST['linkedin'];
    $file = $_POST['file'];
    $referenceName = $_POST[ 'referenceName' ];
    $referenceEmail = $_POST[ 'referenceEmail' ];


    // File Uploading 
    $file_name = $_FILES["file"]["name"];
    $file_temp = $_FILES["file"]["tmp_name" ];


    if (isset($file_name) && $file_name != "") {
        try {
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

                // Add attachment
                $mail->addAttachment($file_temp, $file_name);

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
                    <li>Date : " . $date . " </li>
                    <li>Position : " .$position . "</li>
                    <li>Employment Status : " .$employmentStatus . "</li>
                    <li>Linkedin : " . $linkedin . "</li>
                    <li>Reference Name : " . $referenceName . "</li>
                    <li>Reference Email : " . $referenceEmail . "</li>
                </ul>
                <p><b>" . $name . "</b>, You will get call back soon!!!</p>";

                $mail->Body = $mailContent;


                // Send email 
                if (!$mail->send()) {
                    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    header("Location: thankyou.html");
                    // echo 'Message has been sent.';
                }
            }catch(Exception $e) {
                echo "Error sending email: {$mail->ErrorInfo}";
            }
        } else {
            echo "Please select a file to upload.";
        }
}



<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = ($_POST["name"]);
    $mobile = ($_POST["mobile"]);
    $email = ($_POST["email"]);
    $message = ($_POST["message"]);

    // Specify your email and subject
    $to = "cuhcseprincelal2@gmail.com"; // Change this to your own email address
    $subject = "New Form Submission on website";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Mobile Number: $mobile\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank You! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>

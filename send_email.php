<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sender_name = $_POST['sender_name'];
    $sender_email = $_POST['sender_email'];

    // Headers
    $headers = "From: " . $sender_name . " <" . $sender_email . ">" . "\r\n" .
               "Reply-To: " . $sender_email . "\r\n" . 
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Email sent successfully!</p>";
    } else {
        echo "<p>Failed to send email.</p>";
    }
}


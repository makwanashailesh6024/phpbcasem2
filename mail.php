<?php
$to = 'patelketan6024@gmail.com';
$subject = 'Test Email';
$message = 'Hello, this is a test email from PHP!';
$headers = 'From: patelketan6024@gmail.com';

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>
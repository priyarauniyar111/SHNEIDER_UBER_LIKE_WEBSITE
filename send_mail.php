<?php
$to = "sakshiparmarsingh456@gmail.com"; // Recipient's email address
$subject = "Test Email"; // Subject of the email
$message = "This is a test email."; // Body of the email
$headers = "From: priyarauniyar001@gmail.com"; // Sender's email address

// Send the email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>

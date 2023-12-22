<?php
$to = "sanjana.konda@gbtech.in"; // Replace with recipient's email
$subject = "Test Email";
$message = "This is a test email sent from my website.";
$headers = "From: sender@example.com"; // Replace with sender's email

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo $to + "Email sent successfully";
} else {
    echo "Failed to send email";
}
?>

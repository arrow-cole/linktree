<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'arrow@acole.xyz'; // Email address where you want to receive the form data
    $subject = 'Contact Form Submission';
    $message_body = "Name: $name\nEmail: $email\n\n$message";
    
    // Send email
    if (mail($to, $subject, $message_body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message. Please try again later.';
    }
} else {
    echo 'Invalid request';
}

?>

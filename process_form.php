<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Email recipient (change this to your email address)
    $to = "edmon.flores@evsu.edu.ph";
    
    // Email subject
    $subject = "Message from Contact Form";
    
    // Email body
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Additional headers
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // If email is sent successfully, redirect back to the contact page with a success message
        header("Location: contact.php?status=success");
        exit;
    } else {
        // If email sending fails, redirect back to the contact page with an error message
        header("Location: contact.php?status=error");
        exit;
    }
} else {
    // If the request method is not POST, redirect back to the contact page with an error message
    header("Location: contact.php?status=error");
    exit;
}
?>

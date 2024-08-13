<?php

// Database connection
include 'database.inc.php'; // Ensure this file has your database connection details

// PHPMailer files and namespace import
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Initialize variables
$msg = '';

// Process form submission// Process form submission
if (isset($_POST['send'])) {
    // Sanitize and validate inputs (you can add more validation as needed)
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
    // Insert into database using direct query
    $query = "INSERT INTO contact_tm (name, email, subject, phone, message) VALUES ('$name','$email','$subject','$phone','$message')";
    
    if (mysqli_query($con, $query)) {
        $msg = "Submitted successfully";
    } else {
        $msg = "Error: " . mysqli_error($con);
    }
    
    // Sending email using PHPMailer
    try {
        $mail = new PHPMailer(true);
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'ahire.sameer04@gmail.com'; // Replace with your email address
        $mail->Password = 'jpfbjenzujpzbwhi'; // Replace with your email password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465; // TCP port to connect to

        // Sender and recipient details
        $mail->setFrom($email, $name);
        $mail->addAddress('ahire.sameer04@gmail.com'); // Replace with recipient email
        $mail->addReplyTo($email, $name);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        
        // Construct email body
        $emailBody = "
            <h2>Contact Form Submission</h2>
            <p><strong>Full Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
        ";

        // Optionally add phone number to the email body
        if (!empty($phone)) {
            $emailBody .= "<p><strong>Phone:</strong> $phone</p>";
        }

        $mail->Body = $emailBody;

        // Send email
        $mail->send();
        
        // Success message and redirect
        echo "<script>alert('Thank you! We will get back to you shortly.'); window.location.href = 'index';</script>";
        
    } catch (Exception $e) {
        // Error message
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}

?>


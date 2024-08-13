<?php

// for submit data to database
include 'database.inc.php'; // Includes the database connection

$msg = "";
if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $c_business_sector = mysqli_real_escape_string($con, $_POST['c_business_sector']);
    $current_products = mysqli_real_escape_string($con, $_POST['current_products']);
    $website = mysqli_real_escape_string($con, $_POST['website']);
    $message = mysqli_real_escape_string($con, $_POST['message']);


    $query = "INSERT INTO enquiry_tm (name, email, phone, subject, current_business_sector, current_products, website,message) VALUES ('$name', '$email', '$phone', '$subject', '$c_business_sector', '$current_products', '$website', '$message')";

    if (mysqli_query($con, $query)) {
        $msg = "Submitted successfully";
    } else {
        $msg = "Error: " . mysqli_error($con);
    }
};  





// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Create an instance; passing `true` enables exceptions
if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();                             // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';         // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                     // Enable SMTP authentication
    $mail->Username   = 'ahire.sameer04@gmail.com';   // SMTP username
    $mail->Password   = 'jpfbjenzujpzbwhi';          // SMTP password
    $mail->SMTPSecure = 'ssl';                    // Enable implicit SSL encryption
    $mail->Port       = 465;                      // TCP port to connect to

    // Recipients
    $mail->setFrom($_POST["email"], $_POST["name"]);   // Sender's email and name
    $mail->addAddress('ahire.sameer04@gmail.com');          // Add a recipient email
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // Reply to sender email

    // Content
    $mail->isHTML(true);                    // Set email format to HTML
    $mail->Subject = $_POST["subject"];     // Email subject
    
    // Build the email body
    $mail->Body = "Name: " . $_POST["name"] . "<br>";
    $mail->Body .= "Email: " . $_POST["email"] . "<br>";
    $mail->Body .= "Phone Number: " . $_POST["phone"] . "<br>";
    $mail->Body .= "Current Business Sector: " . $_POST["c_business_sector"] . "<br>";
    $mail->Body .= "Purrent Products: " . $_POST["current_products"] . "<br>";
    $mail->Body .= "Website: " . $_POST["website"] . "<br><br>";

    $mail->Body .= "Message: <br>" . nl2br($_POST["message"]);  // nl2br() converts newlines to <br> tags

    // Send the email
    $mail->send();

    // Success message and redirect
    echo "
        <script> 
            alert('Message was sent successfully!');
            document.location.href = 'index.php';
        </script>
    ";
}
?>

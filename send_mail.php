<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST ["send"])) {
  // Retrieve the email from the POST request

  // Create a new PHPMailer instance
  $mail = new PHPMailer(true);

  try {
    // Server settings
    $mail->SMTPDebug=2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'sairampandu2003@gmail.com';  // Replace with your SMTP username
    $mail->Password = 'mijnkohyujnqoylk';  // Replace with your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Sender and recipient
    $mail->setFrom('sairampandu2003@gmail.com', 'Faculty Calendar Scheduler');  // Replace with your email and name
    $mail->addAddress($_POST["email"]);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    
    // Set a message in the email body
    $mail->Body = 'This is a test message';
    
    
    

    // Send the email
    $mail->send();
    echo 'Email sent!';
  } catch (Exception $e) {
    echo 'Failed to send email: ' . $mail->ErrorInfo;
  }
}
?>

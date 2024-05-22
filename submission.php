<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $message = $_POST['message'];
    
    // Prepare the email message
    $to = "lycathy71@gmail.com";
    $subject = "RSVP Form Submission";
    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Number of Adults: $adults\n";
    $body .= "Number of Children: $children\n";
    $body .= "Message: $message\n";

    // Send the email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        echo "<p>Thank you for your RSVP!</p>";
    } else {
        // Error sending email
        echo "<p>There was an error submitting your RSVP. Please try again later.</p>";
    }
}
?>

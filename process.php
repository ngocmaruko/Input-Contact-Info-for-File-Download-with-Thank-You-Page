<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get contact info from form
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Send email to specified address
    $to = "ngoc@held.jp";
    $subject = "New File Download";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: noreply@example.com"; // Adjust sender email
    mail($to, $subject, $message, $headers);

    // Redirect to thank you page
    header('Location: thank_you.html');
    exit();
}
?>

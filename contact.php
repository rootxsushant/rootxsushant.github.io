<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST["fullname"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($fullname) && !empty($email) && !empty($message)) {
        $to = "rootxsushant@gmail.com"; // Change this to your email
        $subject = "New Contact Form Submission";
        $body = "Name: $fullname\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>

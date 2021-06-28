<?php

if (isset($_POST["submit"])){
    $recipient = "marianatalie643@gmail.com";
    $subject = "Form to email message";
    $sender = $_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message = $_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    mail($recipient, $subject, $message, "From: $sender <$senderEmail>");
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
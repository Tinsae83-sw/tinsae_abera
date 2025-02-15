<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $to = "tinsae38abera@gmail.com";
    $subject = "New Comment from $name";
    $message = "Name: $name\nEmail: $email\n\nComment:\n$comment";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your comment!";
    } else {
        echo "There was an error sending your comment. Please try again.";
    }
}
?>

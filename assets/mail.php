<?php

$name     = $_POST['name'];
$email    = $_POST['email'];
$subject    = $_POST['subject'];
$message  = $_POST['message'];

$mailheader  = "From:" .$name. "<" .$email.  ">\r\n";

$recipient = "tithysamima789@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZT IT Company</title>
    <link rel="icon" type="image" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="contact-php">
            <h1>Thank you for contacting me. I will get back to you as soon as possible</h1>
            <p class="back">Go back to the <a href="index.html">Homepage</a></p>
            </div>
        </div>
    </section>
</body>
</html>
';
?>
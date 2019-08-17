<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$suggestions = $_POST['suggestions'];

$email_from = 'signups@trioog.com';

$email_subject = "New Signup";

$email_body = "Name : $name.\n".
                "Email : $email.\n".
                "Phone : $number.\n".
                "Suggestions : $suggestions.\n";

$formcontent=" From: $name \n Phone: $phone \n Suggestions: $suggestions";

$recipient = "signups@trioog.com";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html'>Return Home</a>";
?>
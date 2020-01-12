<?php 
/*mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); */

$from="signups@trioog.com"; 
$ToEmail = 'signups@trioog.com';
$EmailSubject = 'SIGNUPS';
$MESSAGE_BODY = "Name: ".$_POST["name"]." \n"; 
$MESSAGE_BODY .= "Phone: ".$_POST["number"]." \n"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]." \n"; 
$MESSAGE_BODY .= "Suggestions: ".nl2br($_POST["suggestions"])." \n"; 

mail($ToEmail,$EmailSubject,$MESSAGE_BODY,"From:".$from);


header('Location: index.html#Sucessful');

?>
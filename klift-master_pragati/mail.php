<?php 
/*mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); */

$from="pragati_engineering@yahoo.co.in"; 
$ToEmail = 'pragati_engineering@yahoo.co.in';
$EmailSubject = $_POST["subject"];
$MESSAGE_BODY = "Name: ".$_POST["name"]." \n";  
$MESSAGE_BODY .= "Email: ".$_POST["email"]." \n"; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])." \n"; 

mail($ToEmail,$EmailSubject,$MESSAGE_BODY,"From:".$from);


header('Location: index.html#Sucessful');

?>
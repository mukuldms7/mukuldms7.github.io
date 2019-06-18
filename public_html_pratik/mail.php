<?php 

//get cart data
include ('dbConfig.php');

$validate = "SELECT * FROM cart ";
$result2 = mysqli_query($con,$validate);
$txt="\r\n\r\n"; $txt1="\r\n";
 foreach ($result2 as $row)
 {
  $txt.=" Product Name: ".$row['name']."  Size = ".$row['size']."  Quantity = ".$row['quantity']."\r\n";   
 }

//get post data
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$add1 = $_POST["address1"];
$add2 = $_POST["address2"];
$towncity = $_POST["towncity"];
$state = $_POST["State"];
$postal = $_POST["postalcode"];
$email = $_POST["email"];
$phone = $_POST["phone"];
										
									
// make it readable

$txt1.=" Name: ".$fname." ".$lname."\r\n \r\n";
$txt1.=" Address: ".$add1." ".$add2."\r\n ";
$txt1.=" Town\City: ".$towncity.", State: ".$state.", PIN: ".$postal ."\r\n \r\n";
$txt1.=" Email: ".$email.", Phone: ".$phone."\r\n ";
//mail it.



    $ToEmail = 'sales@pratikcopper.com'; 
    $EmailSubject = 'Customer Order'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
    $MESSAGE_BODY .= "".nl2br($txt1).""; 
    $MESSAGE_BODY .= "".nl2br($txt).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
    
    $validate = "DELETE FROM cart";
    $result2 = mysqli_query($con,$validate);
  header("location: home.php");
?> 

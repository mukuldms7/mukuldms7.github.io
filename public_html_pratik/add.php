<?php
include ('dbConfig.php');

$var=$_POST['price'];
$name=$_POST['name'];
$qty=$_POST['qty'];
$size=$_POST['size'];
$img=$_POST['img'];
echo "Name = ".$_POST['name']."\n";
echo "price = ".$var."\n";
echo "qty = ".$_POST['qty']."\n";
echo "size = ".$_POST['size']."\n";

	
$insert ="Insert into cart (name,quantity,size,price,image) value ('".$name."','".$qty."','".$size."','".$var."','".$img."' )";
    $result = mysqli_query($con,$insert);
 header("Location:cart.php");
?>
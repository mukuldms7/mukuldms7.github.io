<?php
define('DB_SERVER','localhost');
define('DB_USER','pratig3r_me');
define('DB_PASS' ,'needforspeed!!!');
define('DB_NAME', 'pratig3r_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
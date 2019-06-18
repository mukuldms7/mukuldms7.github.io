<?php 
	
	define('HOST','localhost');
define('USER','pratig3r_me');
define('PASS' ,'needforspeed!!!');
define('DB', 'pratig3r_shopping');
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect '.mysqli_connect_error());
	$ocon = new mysqli(HOST,USER,PASS,DB);
	
	if($ocon->connect_error)
	{
		die("Connection failed : ".$ocon->connect_error);
	}
?>
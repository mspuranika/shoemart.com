<?php 
$hostname="127.0.0.1";
$dbuser="root";
$dbpassword="puranik 037";
$link = mysqli_connect($hostname,$dbuser,$dbpassword); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 

mysqli_close($link); 
$con=mysql_connect('localhost','root','puranik 037') or die (mysql_error());

 
 ?>
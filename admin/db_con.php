<?php 
$dbconnect = new mysqli('localhost','root','','minischool');

if ($dbconnect->connect_error) {
	die('Database connection proplem');
	exit();
}

 ?>
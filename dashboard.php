<?php
//include 'welcome1.php';

session_start();	
$name = $_SESSION['Name'];

if ($name == "Admin" || $name == "admin") 
{
	echo "Welcome Admin!";
	include 'dashboard.html';
}
else
{
	echo "Access Denied, Restricted only to admin";
}

?>
<?php
	$conn = new mysqli("localhost","root","","online_food");
	if ($conn->connect_error) 
    	die("Connection failed: " . $conn->connect_error);
	if (!session_start()) session_start();
	if(session_status() === PHP_SESSION_NONE) 
	{
		$_SESSION['login'] = 0;
	}
?>

<?php
	require_once("connect.php");	
	$_SESSION['login'] = 0;
	header("Location:index.php");
?>
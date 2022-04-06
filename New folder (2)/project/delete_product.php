<?php
	require_once("connect.php");
	$id = $_GET['id'];
	$sql = "DELETE FROM product_info WHERE id = '$id'";
	mysqli_query($conn,$sql);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
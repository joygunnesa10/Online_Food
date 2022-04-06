<?php
	$conn = new mysqli("localhost","root","","Online_Food_Odering");
		if($conn->connect_error)
			die("connection failed: " . $conn->connect_error);
			
			if(session_status()=== PHP_SESSION_NONE)
			{
			session_start();
			$_SESSION['Login'] = 0;
			}
	
?>

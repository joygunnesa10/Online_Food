<?php
	require_once("connect.php");
	
	function User_Info($user_id,$field)
	{
		global $conn;
		$sql = "Select * from user_info where user_id = '$user_id'";
		if($result = mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result) > 0)
			{
				$rows = mysqli_fetch_assoc($result);
				return $rows[$field];
			}
			else
				return "";
		}
		else
			return "";	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel ="stylesheet" href="css/my_style.css" type="text/css"/>
<style type="text/css">
<!--
.style5 {
	color: #0033FF;
	font-size: 36px;
}
.style6 {
	font-size: 24px;
	color: #0066FF;
}
.style14 {color: #000000}
.style16 {font-size: 24px; color: #000000; }
.style19 {color: #0033FF; font-size: 48px; }
-->
</style>
</head>

<body>
<table width="100%" border="0" bgcolor="#999999"cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8"><img src="image/download.jpg" width="100%" height="159" /></td>
  </tr>
  <tr>
    <td colspan="8"><div align="center" >
      <p class="style1"><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;<span class="style19">&nbsp;</span></em><span class="style19"><em>ONLINE FOOD (OD)</em></span></strong><span class="style19">&nbsp;<em>&nbsp;</em></span> </p>
    </div></td>
  </tr>
  
  <tr>
    <td width="20%"><div align="center" class="style6 style14"><a href="Home.php" target="_self">Home</a></div></td>
    <td width="13%"><div align="center" class="style16"><a href="food_menu.php" target="_self">Food Menu</a></div></td>
    <td width="20%"><div align="center" class="style16"><a href="add_food.php" target="_self">Food Add </a></div></td>
    <td width="17%"><div align="center" class="style16">
	<?php
		$user_type = User_Info($_SESSION['user_id'],"user_type");
		if($_SESSION['login'] == 1 and strcmp($user_type,"Admin")==0)
			echo "<a href='food_delivery.php' target='_self'>Food Delivery</a>";
	?>
	</div></td>
    <td width="16%"><div align="center" class="style16">Receipt</div></td>
    <td width="1%"><div align="center" class="style16"></div></td>
    <td width="13%"><div align="center" class="style16">
 <?php 
	if($_SESSION['login'] == 1)
	    echo "<a href='logout.php' target='_self'>Logout </a>";
	else
		echo "<a href='login.php' target='_self'>Login </a>";
	?>
	</div></td>
  </tr>
  <tr>
  <tr>
    <td colspan="6" class="style5"><div align="right"><marquee><?php		if($_SESSION['login'] == 1)		echo " Logged By : ".User_Info($_SESSION['user_id'],"user_name").'('.User_Info($_SESSION['user_id'],"user_type").')';	?></marquee></div></td>
  </tr>
</table>
</body>
</html>


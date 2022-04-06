<?php
	require_once("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel ="stylesheet" href="css/my_style.css" type="text/css"/>
<script>
function Confirm()
{
	var answer = window.confirm("Are You Sure Delete Data from Database?");
	if (answer) 
		return true;
	else 
		return false;
}	
</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><?php	require_once("header.php");	?></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
    <td width="78%" class="style2"><div align="center"><em>Add Foot Items</em></div></td>
    <td width="7%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?php
		$sql = "Select * from add_food_info";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) > 0)
				{
					$sl = 1;
					
					echo "<table width='100%' border='1' class='style6' cellspacing='0' cellpadding='0'>";
					echo "<tr bgcolor='#CCCCFF'><td>SL</td>";
					echo "<td>Food Name</td>";
					echo "<td>Food Price</td>";
					echo "<td align='center'><img src='image/delete_icon.jpg' width='40' height='20' /></td>";
					echo "<td align='center'><img src='image/edit_icon.png' width='40' height='20' /></td>";
					echo "<td>Order For Food</td></tr>";
					$sl = 1;
					while($rows = mysqli_fetch_assoc($result))
					{
						echo "<tr><td>";	echo $sl++.'.';	echo "</td>";
						echo "<td>";	echo $rows["f_name"];	echo "</td>";
						echo "<td>";	echo $rows["f_price"];	echo "</td>";
						echo "<td align='center'><a href='delete_food.php?id=";	echo $rows["id"];	echo "' onclick='return Confirm()'><img src='image/delete_icon.jpg' width='18' height='18' /></a></td>";
						echo "<td align='center'><a href='add_food.php?edit_id=";	echo $rows["id"];	echo "'><img src='image/edit_icon.png' width='15' height='15' /></a></td>";
						echo "<td><a href='food_order.php' target='_self'>order Now</a></td></tr>";
					}	
					echo "</table>";	
					
					
				}
			}	
	
	?>
    </div>
    <div align="center"></div>      <div align="center"></div></td>
  </tr>
  
  <tr>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><?php	require_once("fotter.php");	?></td>
  </tr>
</table>
</body>
</html>

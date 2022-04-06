<?php
	require_once("connect.php");
	if(isset($_POST['add']))
	{
		$f_name = $_POST['f_name'];
		$f_price = $_POST['f_price'];
		if(!empty($f_name) and !empty($f_price))
		{
$sql = "Select * from add_food_info where f_name = '$f_name' and f_price = '$f_price'";
		if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) == 0)
				{
					$ins = "INSERT INTO add_food_info(`f_name`, `f_price`) VALUES ('$f_name','$f_price')";
					
					mysqli_query($conn,$ins);
				}
				
			}	
					
		}
		
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
.style1 {
	color: #00CCFF;
	font-size: 24px;
}
-->
</style>
</head>

<body>
<form action="" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="37" colspan="3"><?php	require_once("header.php");	?></td>
  </tr>
  
  
  
  <tr>
    <td width="28%" height="21"><div align="center" class="style4">Add Food </div></td>
    <td width="2%">&nbsp;</td>
    <td width="70%">&nbsp;</td>
  </tr>
  <tr>
    <td class="style5"><div align="right">Food Name </div></td>
    <td class="style5">&nbsp;</td>
    <td class="style5"><input type="text" name="f_name" size="30" class="style5" /></td>
  </tr>
  <tr>
    <td class="style5"><div align="right">Food Price</div></td>
    <td class="style5">&nbsp;</td>
    <td class="style5"><input type="text" name="f_price" size="30" class="style5" /></td>
  </tr>
  <tr>
    <td class="style5">&nbsp;</td>
    <td class="style5">&nbsp;</td>
    <td class="style5">&nbsp;</td>
  </tr>
  <tr>
    <td class="style5"><div align="right">
      <input type="submit" name="add" value="Add"  />
    </div></td>
    <td class="style5">&nbsp;</td>
    <td class="style5">&nbsp;</td>
  </tr>
  <tr>
    <td class="style5"><div align="right"></div></td>
    <td class="style5">&nbsp;</td>
    <td class="style5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><?php	require_once("fotter.php");	?></td>
  </tr>
</table>
</form>
</body>
</html>

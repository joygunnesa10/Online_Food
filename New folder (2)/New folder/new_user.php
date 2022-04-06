<?php
	require_once("connect.php");
	
	if(isset($_POST['save']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		$user_name = $_POST['user_name'];
		$user_empid = $_POST['user_empid'];
		$user_type = "Normal";
		$user_active = "No";
		if(!empty($user_id) and !empty($user_password) and !empty($user_name) and !empty($user_empid))
		{
			
			$sql = "Select * from user_info where user_id = '$user_id' or user_empid = 'user_empid'";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) == 0)
				{
					$ins  = "INSERT INTO user_info(`user_id`, `user_password`, `user_name`, `user_empid`, `user_type`,`user_active`) VALUES ('$user_id', '$user_password', '$user_name', '$user_empid','$user_type','$user_active')";
					mysqli_query($conn,$ins);
		
					header("Location:login.php");
				}
				else
					echo "<script>		alert('This Employee or User ID already used');	</script>";
			
			}		
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/mystyle.css" type="text/css" />
</head>

<body>
<form action="" method="post">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="3"><?php	require_once("header.php");	?></td>
  </tr>
  <tr>
    <td width="49%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="49%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style3">New User Registration </div></td>
  </tr>
  <tr>
    <td class="style5"><div align="right"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style5"><div align="right">User ID </div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_id" size="30" class="style5" /></td>
  </tr>
  <tr>
    <td class="style5"><div align="right">Password</div></td>
    <td>&nbsp;</td>
    <td><input type="password" name="user_password" size="30" class="style5" /></td>
  </tr>
  <tr>
    <td class="style5"><div align="right">Name</div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_name" size="50" class="style5" /></td>
  </tr>
  <tr>
    <td class="style5"><div align="right">Customer ID </div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_empid" size="20" class="style5" /></td>
  </tr>
  <tr>
    <td class="style5">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style5"><div align="right">
      <input type="submit" name="save" class="style5" value="Save" />
    </div></td>
    <td>&nbsp;</td>
    <td> <input type="submit" name="cancel" class="style5" value="Cancel" /></td>
  </tr>
  <tr>
    <td class="style5"><div align="right"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><?php	require_once("fotter.php");	?></td>
  </tr>
</table>
</form>
</body>
</html>

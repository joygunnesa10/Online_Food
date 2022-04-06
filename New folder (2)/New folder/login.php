<?php
	require_once("connect.php");
	
	if(isset($_POST['login']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		if(!empty($user_id) and !empty($user_password))
		{
			$sql = "Select * from user_info where user_id = '$user_id' and user_password = '$user_password' and user_active = 'Yes'";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) > 0)
				{
					$_SESSION['login'] = 1;
					$_SESSION['user_id'] = $user_id;
					header("Location:index.php");
				}
				else
					echo "<script>		alert('Your ID or Password Not Matching');	</script>";
			}
		}
		else
			echo "<script>		alert('Sould fill all infornation');	</script>";
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
    <td colspan="3"><div align="center" class="style3">Login Page </div></td>
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
    <td class="style5">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="style6"><a href="new_user.php" target="_self">(New User)</a></td>
  </tr>
  <tr>
    <td class="style5"><div align="right">
      <input type="submit" name="login" class="style5" value="Login" />
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel ="stylesheet" href="css/my_style.css" type="text/css"/>
<style type="text/css">
<!--
.style7 {font-size: 16px}
.style8 {font-size: 16px; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td colspan="3"><?php require_once("Header.php")?></td>
  </tr>
  <tr>
    <td width="48%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="51%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style2"><em>Login Page </em></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style6">User Type </span></div></td>
    <td>&nbsp;</td>
     <td><span class="style6">
              <select name="user_type" class="style6">
                <option>Admin</option>
                <option>Customer</option>
      </select>
            </span></td>
  </tr>
  <tr>
    <td><div align="center" class="style3">
      <div align="right" class="style8">User ID </div>
    </div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_Id" size ="30" clas="style5"/></td>
  </tr>
  <tr>
    <td><div align="center" class="style4">
      <div align="right" class="style7">Password</div>
    </div></td>
    <td>&nbsp;</td>
    <td><input type="password" name="user_password" size ="30" clas="style5"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="style6"><a href="user_registration.php" target="_self">(New User) </a><a href="user_registration.php" target="_self" class="style7"></a></td>
  </tr>
  <tr>
    <td>      <div align="right">
      <input type ="submit" name="login"  class="style3" value="Login"/>
    </div></td>
    <td>&nbsp;</td>
    <td><input type ="submit" name="cancel" class="style3" value="Cancel"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><?php require_once("Footer.php")?></td>
  </tr>
</table>
</body>
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel ="stylesheet" href="css/my_style.css" type="text/css"/>
<style type="text/css">
<!--
.style7 {font-size: 16px}
.style10 {font-size: 16px; color: #0000FF; }
-->
</style>
</head>

<body>
<form action ="" method="post">
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
    <td colspan="3"><div align="center" class="style2"><em>New User Registration  </em></div></td>
  </tr>
  
  <tr>
    <td><div align="center" class="style3">
      <div align="right" class="style7">User ID </div>
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
    <td class="style5"><div align="right" class="style7">Name</div></td>
    <td>&nbsp;</td>
    <td class="style6"><input type="text" name="user_name" size ="40" clas="style5"/></td>
  </tr>
  
  <tr>
    <td class="style5"><div align="right" class="style7">Customer ID </div></td>
    <td>&nbsp;</td>
    <td class="style6"><input type="text" name="user_cusid" size ="35" clas="style5"/></td>
  </tr>
  
  <tr>
    <td>      <div align="right">
       <input type ="submit" name="save"  class="style3" value="Save"/>    
    </div></td>
    <td>&nbsp;</td>
    <td><input type ="submit" name="cancel" class="style3" value="Cancel"/></td>
  </tr>
  <tr>
    <td colspan="3"><?php require_once("Footer.php")?></td>
  </tr>
</table>
</form>
</body>
</html>

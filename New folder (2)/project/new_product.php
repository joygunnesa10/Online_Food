<?php
	require_once("connect.php");
	require_once("functions.php");
	if(isset($_POST['add_new']))
	{
		$product_name = $_POST['product_name'];
		$product_category = $_POST['product_category'];
		$product_company = $_POST['product_company'];
		$product_purpose = $_POST['product_purpose'];
		$product_remarks = $_POST['product_remarks'];
		$product_addby = $_SESSION['user_id'];
		$product_avail = 'Y';
		if(!empty($product_name) and !empty($product_category) and !empty($product_company) and !empty($product_purpose))
		{
			$sql = "Select * from product_info where product_name = '$product_name' and product_category = '$product_category' and product_company = '$product_company'";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) == 0)
				{
					$ins = "INSERT INTO product_info(`product_name`, `product_category`, `product_company`, `product_purpose`, `product_avail`, `product_remarks`,`product_addby`) VALUES ('$product_name', '$product_category', '$product_company', '$product_purpose', '$product_avail', '$product_remarks','$product_addby')";
					mysqli_query($conn,$ins);
				}
			}
		}
	
	}
	
	if(isset($_POST['update']))
	{
		$id = $_REQUEST["edit_id"];
		$product_name = $_POST['product_name'];
		$product_category = $_POST['product_category'];
		$product_company = $_POST['product_company'];
		$product_purpose = $_POST['product_purpose'];
		$product_remarks = $_POST['product_remarks'];
		$product_addby = $_SESSION['user_id'];
		$product_avail = 'Y';
		if(!empty($product_name) and !empty($product_category) and !empty($product_company) and !empty($product_purpose))
		{
			$upd = "UPDATE product_info SET product_name = '$product_name', product_category = '$product_category', product_company = '$product_company', product_purpose = '$product_purpose', product_avail = '$product_avail', product_addby = '$product_addby', product_remarks = '$product_remarks' WHERE id = '$id'";
			mysqli_query($conn,$upd);
		}
	
	}
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/mystyle.css" type="text/css" />

<script>
function Confirm()
{
	var answer = window.confirm("Delete Date from Database?");
	if (answer) 
		return true;
	else 
		return false;
}	


</script>


</head>

<body>
<form action="" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><?php	require_once("header.php");	?></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style3">Products Information<a href="#" onclick="return Confirm()"></a></div></td>
    </tr>
  <tr>
    <td width="46%"><table width="100%" border="0" cellspacing="2" cellpadding="3">
      <tr>
        <td colspan="3"><div align="center" class="style4"><strong>New Products </strong></div></td>
        </tr>
      <tr>
        <td width="45%" class="style5"><div align="right">Product Name </div></td>
        <td width="9%" class="style5"><div align="center">:</div></td>
        <td width="46%" class="style5"><input type="text" name="product_name" style="width:100%" class="style6" value="<?php	if(isset($_REQUEST['edit_id'])) echo Product_Info($_REQUEST['edit_id'],"product_name");	?>" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Category</div></td>
        <td class="style5"><div align="center">:</div></td>
        <td class="style5"><input list="prod_cat" name="product_category" style="width:100%" class="style6" value="<?php	if(isset($_REQUEST['edit_id'])) echo Product_Info($_REQUEST['edit_id'],"product_category");	?>" />
			<datalist id="prod_cat">
			  <option value="Chrome">Chrome</option>
			  <option value="Firefox">Firefox</option>
			</datalist>		</td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Company</div></td>
        <td class="style5">&nbsp;</td>
        <td class="style5"><input list="prod_com" name="product_company" style="width:100%" class="style6" value="<?php	if(isset($_REQUEST['edit_id'])) echo Product_Info($_REQUEST['edit_id'],"product_company");	?>" />
			<datalist id="prod_com">
			  <option value="Beximco">Beximco</option>
			  <option value="Libra">Libra</option>
			  <option value="ACM">ACM</option>
			</datalist>	</td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Purpose</div></td>
        <td class="style5"><div align="center">:</div></td>
        <td class="style5"><textarea name="product_purpose" style="width:100%;" rows="3" class="style6"><?php	if(isset($_REQUEST['edit_id'])) echo Product_Info($_REQUEST['edit_id'],"product_purpose");	?></textarea></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Remarks
        </div>
          <div align="right"></div></td>
        <td class="style5"><div align="center">:</div></td>
        <td class="style5"><input type="text" name="product_remarks" style="width:100%" class="style6" value="<?php	if(isset($_REQUEST['edit_id'])) echo Product_Info($_REQUEST['edit_id'],"product_remarks");	?>" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right"><?php		
			if(isset($_REQUEST['edit_id']))
				echo "<input type='submit' name='update' value='Update' class='style6'  />";
			else
				echo "<input type='submit' name='add_new' value='Add New' class='style6'  />";
		
		?></div></td>
        <td class="style5"><div align="center"></div></td>
        <td class="style5">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="3%">&nbsp;</td>
    <td width="51%" valign="top"><?php
		$sql = "Select * from product_info where product_avail = 'Y'";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) > 0)
				{
					$sl = 1;
					
					echo "<table width='100%' border='1' class='style6' cellspacing='0' cellpadding='0'>";
					echo "<tr bgcolor='#FF00FF'><td>SL</td>";
					echo "<td>P.Code</td>";
					echo "<td>Product Name</td>";
					echo "<td>Copmany</td>";
					echo "<td>Category</td>";
					echo "<td align='center'><img src='images/delete_icon.jpg' width='40' height='20' /></td>";
					echo "<td align='center'><img src='images/edit_icon.png' width='40' height='20' /></td></tr>";
					$sl = 1;
					while($rows = mysqli_fetch_assoc($result))
					{
						//echo $rows["id"].". ".$rows["product_name"].' - '.$rows["product_company"]."<br>";
						echo "<tr><td>";	echo $sl++.'.';	echo "</td>";
						echo "<td>";	echo $rows["id"];	echo "</td>";
						echo "<td>";	echo $rows["product_name"];	echo "</td>";
						echo "<td>";	echo $rows["product_company"];	echo "</td>";
						echo "<td>";	echo $rows["product_category"];	echo "</td>";
						echo "<td align='center'><a href='delete_product.php?id=";	echo $rows["id"];	echo "' onclick='return Confirm()'><img src='images/delete_icon.jpg' width='18' height='18' /></a></td>";
						echo "<td align='center'><a href='new_product.php?edit_id=";	echo $rows["id"];	echo "'><img src='images/edit_icon.png' width='15' height='15' /></a></td></tr>";
					}	
					echo "</table>";	
					
					
				}
			}	
	
	?></td>
  </tr>
  <tr>
    <td colspan="3"><?php	require_once("fotter.php");	?></td>
  </tr>
</table>
</form>
</body>
</html>

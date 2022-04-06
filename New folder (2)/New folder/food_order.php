<?php
	require_once("connect.php");
	if(isset($_POST['order_now']))
	{
		$cus_id = $_POST['cus_id'];
		$cus_address = $_POST['cus_address'];
		$phone_num = $_POST['phone_num'];
		$food_name = $_POST['food_name'];
		$food_category = $_POST['food_category'];
		$total_peices = $_POST['total_peices'];
		$food_price = $_POST['food_price'];
		$order_date = $_POST['order_date'];
		
		if(!empty($cus_id) and !empty($cus_address) and !empty($phone_num) and !empty($food_name) and !empty($food_category) and !empty($total_peices)
		and !empty($food_price) and !empty($order_date))
		{
$sql = "Select * from food_info where cus_id = '$cus_id' and food_name = '$food_name' and food_category = '$food_category'";
		if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) == 0)
				{
					$ins = "INSERT INTO food_info(`cus_id`, `cus_address`, `phone_num`, `food_name`, `food_category`,`total_peices`, `food_price`, `order_date`) VALUES ('$cus_id', '$cus_address', '$phone_num', '$food_name', '$food_category', '$total_peices', '$food_price', '$order_date')";
					
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
.style7 {
	color: #000000;
	font-weight: bold;
}
.style8 {color: #000000}
-->
</style>
</head>

<body>
<form action="" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><?php	require_once("header.php");	?></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style1"></div></td>
  </tr>
  
  <tr>
    <td width="45%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="52%">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td width="47%" class="style5"><div align="right">Customer ID </div></td>
        <td width="5%" class="style5"><div align="center" class="style7">:</div></td>
        <td width="48%"><input type="text" name="cus_id" size="30" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Customer Name </div></td>
        <td class="style5"><span class="style8"><strong>:</strong></span></td>
        <td><input type="text" name="cus_name" size="30" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Customer Address </div></td>
        <td class="style5"><div align="center" class="style7">:</div></td>
        <td><input type="text" name="cus_address" size="30" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Phone Number </div></td>
        <td class="style5"><div align="center" class="style7">:</div></td>
        <td><input type="int" name="phone_num" size="30" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Food Name </div></td>
        <td class="style5"><div align="center" class="style7">:</div></td>
        <td class="style5"><input type="text" name="food_name" size="0" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Food Category </div></td>
        <td class="style5"><div align="center" class="style7">:</div></td>
        <td class="style5"><input list="food_cat" name="food_category" style+"width:100%" class="style5" />
		<datalist id="food_cat">
		<option value="Fast Food">Fast Food</option>
		<option value="Vegetables">Vegetables</option>	</td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Total Peices </div></td>
        <td class="style8 style5"><div align="center"><strong>:</strong></div></td>
        <td><div align="left"><input type="number" name="Input" class="style5" /></div></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Food price </div></td>
        <td class="style5"><div align="center" class="style7">:</div></td>
        <td><div><input type="number" name="" class="style5" /></div></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Order Date</div></td>
        <td class="style5"><div align="center" class="style7">:</div></td>
        <td><input type="date" name="" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right"><input type="submit" name="order_now" value="Order Now"  /></div></td>
        <td class="style5"><div align="center"><span class="style8"></span></div></td>
        <td><div align="left">
          <input type="submit" name="cancel"  value="Cancel" />
        </div></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td><img src="image/images.jpg" width="558" height="269" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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

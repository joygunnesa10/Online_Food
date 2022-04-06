<?php
	require_once("connect.php");
	if(isset($_POST['delivery']))
	{
		$cus_id = $_POST['cus_id'];                      
		$cus_name = $_POST['cus_name'];
		$cus_address = $_POST['cus_address'];
		$phone_num = $_POST['phone_num'];
		$food_name = $_POST['food_name'];
		$food_category = $_POST['food_category'];
		$total_peices = $_POST['total_peices'];
		$food_deliver_by = $_POST['food_deliver_by'];
		$receipt_date = $_POST['receipt_date'];
		$delivery_date = $_POST['delivery_date'];
		
		if(!empty($cus_id) and !empty($cus_name) and !empty($cus_address) and !empty($phone_num) and !empty($food_name) and !empty($food_category) and !empty($total_peices) and !empty($food_deliver_by) and !empty($receipt_date) and !empty($delivery_date))
		{
$sql = "Select * from delivery_info where cus_id = '$cus_id' and food_name = '$food_name' and food_category = '$food_category'";
		if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) == 0)
				{
					$ins = "INSERT INTO delivery_info(`cus_id`, `cus_name`, `cus_address`, `phone_num`, `food_name`, `food_category`,`total_peices`, `food_deliver_by`,`receipt_date`, `delivery_date`) VALUES ('$cus_id','$cus_name', '$cus_address', '$phone_num', '$food_name', '$food_category', '$total_peices', '$food_deliver_by','$receipt_date','$delivery_date')";
					
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
.style9 {font-size: 18px; font-weight: bold; }
.style10 {color: #000000}
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
    <td colspan="3"><div align="center" class="style1">
      <div align="left"></div>
    </div></td>
  </tr>
  
  <tr>
    <td width="53%"><table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td colspan="3"><div align="center" class="style4">Order Delivery</div></td>
        </tr>
      <tr>
        <td width="43%" class="style5"><div align="right">Customer ID </div></td>
        <td width="6%"><div align="center"><span class="style9">:</span></div></td>
        <td width="51%"><input type="text" name="cus_id" size="30" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Customer Name </div></td>
        <td><div align="center" class="style9">
          <div align="center">:</div>
        </div></td>
        <td><div align="left"><input type="text" name="cus_name" size="30" class="style5" /></div></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Customer Address </div></td>
        <td><div align="center" class="style9">
          <div align="center">:</div>
        </div></td>
        <td><div align="left"><input type="text" name="cus_address" size="30" class="style5" /></div></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Phone Number </div></td>
        <td><div align="center" class="style9">
          <div align="center">:</div>
        </div></td>
        <td><div align="left"><input type="text" name="phone_num" size="30" class="style5" /></div></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Food Name </div></td>
        <td><div align="center" class="style9">
          <div align="center">:</div>
        </div></td>
        <td><input type="text" name="food_name" size="30" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Food Category </div></td>
        <td><div align="center" class="style9">
          <div align="center">:</div>
        </div></td>
        <td><input list="food_cat" name="food_category" style="width:40%" class="style5" />
		<datalist id="food_cat">
		<option value="Fast Food"></option>
		<option value="Vegetables"></option>
		<option value="Dairy"></option>
		<option value="Protein"></option>
		<option value="Grains"></option>	</td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Food Peices </div></td>
        <td><div align="center" class="style9">
          <div align="center">:</div>
        </div></td>
        <td><div align="left"><input type="number" name="total_peices" class="style5" /></div></td>
      </tr>
      <tr>
        <td class="style5"><div align="right"> Deliver By </div></td>
        <td><div align="center" class="style9">
          <div align="center">:</div>
        </div></td>
        <td><div align="left"><input type="text" name="food_deliver_by" class="style5" /></div></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Delivery Date </div></td>
        <td><div align="center" class="style9">
          <div align="center">:</div>
        </div></td>
        <td><input type="date" name="delivery_date" class="style5" /></td>
      </tr>
      <tr>
        <td><div align="right" class="style5">Receipt Date </div></td>
        <td><div align="center" class="style5 style10"><strong>:</strong></div></td>
        <td><input type="date" name="receipt_date" class="style5" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="left"><input type="submit" name="delivery" value="Delivery"  /></div></td>
      </tr>
    </table></td>
    <td width="4%">&nbsp;</td>
    <td width="43%"><div align="left"><img src="image/download.png" width="254" height="198" /></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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

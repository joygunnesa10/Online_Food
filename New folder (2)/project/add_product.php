<?php
	require_once("connect.php");
	require_once("functions.php");
	
	
	if(isset($_POST['add_product']))
	{
		$product_id = $_POST['product_id'];
		$product_total = $_POST['product_total'];
		$product_unit = $_POST['product_unit'];
		$product_pdate = $_POST['product_pdate'];
		$product_edate = $_POST['product_edate'];
		$product_offer = $_POST['product_offer'];
		$product_deliver_by = $_SESSION['user_id'];
		$product_receipt = $_POST['product_receipt'];
		$product_remarks = $_POST['product_remarks'];
		
		$sql = "Select * from product_add where product_id = $product_id and product_receipt = '$product_receipt'";
		if($res = mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($res) == 0)
			{
				$ins = "INSERT INTO product_add(`product_id`, `product_total`, `product_unit`, `product_pdate`, `product_edate`, `product_offer`, `product_deliver_by`, `product_receipt`, `product_remarks`) VALUES ('$product_id', '$product_total', '$product_unit', '$product_pdate', '$product_edate', '$product_offer', '$product_deliver_by', '$product_receipt', '$product_remarks')";
				mysqli_query($conn,$ins);
			}
			else
				echo "<script>	alert('This Item already added...');	</script>";
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
function ShowProductDetails(str) 
{
  if (str == "") {
    document.getElementById("product_add").innerHTML = "";
    return;
  } 
  else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("product_add").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","show_product_details.php?id="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>

<body>
<form action="" method="post"> 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><?php	require_once("header.php");	?></td>
  </tr>
  <tr>
    <td width="56%"><table width="99%" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td colspan="3"><div align="center" class="style3">Product + </div></td>
        </tr>
      <tr>
        <td width="48%" class="style5"><div align="right">Product</div></td>
        <td width="5%">&nbsp;</td>
        <td width="47%"><select name="product_id" class="style5">
		<option></option>
		<?php
			$sql = "Select * from product_info where product_avail = 'Y'";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) > 0)
				{
					while($rows = mysqli_fetch_assoc($result))
					{
						echo "<option value = "; echo $rows["id"];	echo ">".$rows["product_name"].' - '.$rows["product_company"]."</option>";		
					}
				}
			}
		?>
		</select></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Total Peices </div></td>
        <td>&nbsp;</td>
        <td><input type="number" name="product_total" class="style5"  /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Unit Price </div></td>
        <td>&nbsp;</td>
        <td><input type="number" name="product_unit" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Product Date </div></td>
        <td>&nbsp;</td>
        <td><input type="date" name="product_pdate" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Expire Date </div></td>
        <td>&nbsp;</td>
        <td><input type="date" name="product_edate" class="style5" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Product Offer</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="product_offer" class="style5" style="width:100%" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Deliver By </div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="product_deliver_by" class="style5" style="width:100%" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Receipt No </div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="product_receipt" class="style5" style="width:100%" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right">Remarks</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="product_remarks" class="style5" style="width:100%" /></td>
      </tr>
      <tr>
        <td class="style5"><div align="right"><input type="submit" name="add_product" value="Add Product" class="style5" /></div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td valign="top" id="product_add"><?php
		$sql = "Select * from product_add group by product_id";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) > 0)
				{
					$sl = 1;
					
					echo "<table width='100%' border='1' class='style6' cellspacing='0' cellpadding='0'>";
					echo "<tr bgcolor='#FF00FF'><td>SL</td>";
					echo "<td>Product Name</td>";
					echo "<td>Copmany</td>";
					echo "<td>Total IN</td></tr>";
					$sl = 1;
					while($rows = mysqli_fetch_assoc($result))
					{
						//echo $rows["id"].". ".$rows["product_name"].' - '.$rows["product_company"]."<br>";
						echo "<tr><td>";	echo $sl++.'.';	echo "</td>";
						echo "<td><a onclick='ShowProductDetails(";		echo $rows["product_id"];	echo ")' href='#'>";	echo Product_Info($rows["product_id"],"product_name");	echo "</a></td>";
						echo "<td>";	echo Product_Info($rows["product_id"],"product_company");	echo "</td>";
						echo "<td>";	echo Product_In($rows["product_id"]);	echo "</td></tr>";
					}	
					echo "</table>";	
					
					
				}
			}	
	
	?></td>
    </tr>
  <tr>
    <td colspan="2"><?php	require_once("fotter.php");	?></td>
  </tr>
</table>
</form>
</body>
</html>

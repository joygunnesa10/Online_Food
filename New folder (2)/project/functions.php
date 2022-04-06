<?php
	require_once("connect.php");
	
	function Product_Info($id,$field)
	{
		global $conn;
		$sql = "Select * from product_info where id = '$id'";
		if($result = mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result) > 0)
			{
				$rows = mysqli_fetch_assoc($result);
				return $rows[$field];
			}
			else
				return "";
		}
		else
			return "";	
	}
	
	function Product_In($product_id)
	{
		global $conn;
		$total = 0;
		$sql = "Select * from product_add where product_id = '$product_id'";
		if($result = mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result) > 0)
			{
				while($rows = mysqli_fetch_assoc($result))
				{
					$total += $rows["product_total"];
				}
			}
		}		
		return $total;
	}

?>
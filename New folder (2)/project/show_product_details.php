<?php
	require_once("connect.php");
	require_once("functions.php");
	$id = $_REQUEST['id'];
			$sql = "Select * from product_add group by product_id";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) > 0)
				{				
					echo "<table width='100%' border='1' class='style6' cellspacing='0' cellpadding='0'>";
					echo "<tr bgcolor='#FF00FF'><td>SL</td>";
					echo "<td>Product Name</td>";
					echo "<td>Copmany</td>";
					echo "<td>Total IN</td></tr>";
					$sl = 1;
					while($rows = mysqli_fetch_assoc($result))
					{
						echo "<tr><td>";	echo $sl++.'.';	echo "</td>";
						echo "<td><a onclick='ShowProductDetails(";		echo $rows["product_id"];	echo ")' href='#'>";	echo Product_Info($rows["product_id"],"product_name");	echo "</a></td>";
						echo "<td>";	echo Product_Info($rows["product_id"],"product_company");	echo "</td>";
						echo "<td>";	echo Product_In($rows["product_id"]);	echo "</td></tr>";
						
						if($rows["product_id"]==$id)
						{
							echo "<tr><td colspan='4'>";
							
								echo "<table width='100%' border='0' class='style6' cellspacing='0' cellpadding='0'>";
								echo "<tr bgcolor='#00FFFF'><td>SL</td>";
								echo "<td>Product Receipt</td>";
								echo "<td>Total</td><td>Unit</td><td>Offer</td></tr>";
								$psql = "Select * from product_add where product_id = '$id'";
								$psl = 1;
								if($pres = mysqli_query($conn,$psql))
								{
									if(mysqli_num_rows($pres) > 0)
									{
										$sl = 1;	
										while($prow = mysqli_fetch_assoc($pres))
										{
											echo "<tr><td>";	echo $psl++.'.';	echo "</td>";
											echo "<td>";	echo $prow["product_receipt"];	echo "</td>";
											echo "<td>";	echo $prow["product_total"];	echo "</td>";
											echo "<td>";	echo $prow["product_unit"];	echo "</td>";
											echo "<td>";	echo $prow["product_offer"];	echo "</td></tr>";
										}				
									}
								}
								echo "</table>";				
							echo "</td></tr>";
						}
					}	
					echo "</table>";	
					
					
				}
			}
	
	

?>
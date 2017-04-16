<?php
	include("connection.php");
	$query="select * from bill";
	$result=mysqli_query($link,$query);
	$row=mysqli_fetch_array($result);
	if(isset($row))
	{
		$result=mysqli_query($link, $query);
		$p=0;
		while($row=mysqli_fetch_array($result))
		{
			//print_r($row);
			echo "<h3 class='center'>Bill Number : ".$row['id']."</h3><h4 class='center'>Order Number : ".$row['orderno']." Date : ".$row['date']." Cost : ".$row['cost']."</h4>";
			$query1="select * from `order` where id='".$row['orderno']."'";
			$result1=mysqli_query($link,$query1);
			//$row1=mysqli_fetch_array($result1);
			echo "<ul class='center'>";
			//if(isset($row1))
			//{
				$z="";
				//$row1=mysqli_fetch_array($result1);
				//print_r($row1);
				while ($row1=mysqli_fetch_array($result1)) {
					//print_r($row1);
					if($z!=$row1['eid'])
					{
					echo "<li>Employee Id : ".$row1['eid']."</li>";
				
						$z=$row1['eid'];
					}
					$query2="select * from `product` where id='".$row1['pid']."'";
					$result2=mysqli_query($link,$query2);
					$row2=mysqli_fetch_array($result2);
					echo "<li>Product Id : ".$row1['pid']." Product Name : ".$row2['name']." Cost per item : ".$row2['cost']." Quantity : ".$row1['pquantity']."</li>";
				}
				
			//}
			echo "</ul>";
		}
	}
?>
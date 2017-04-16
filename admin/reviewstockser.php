<?php

	
	include("connection.php");

	$query="select * from product";
	$result=mysqli_query($link, $query);
	$row=mysqli_fetch_array($result);
	if($row)
	{
		$result=mysqli_query($link, $query);
		echo "<tr><th>Id<//th><th>Name<//th><th>Quantity<//th><//tr>";
		while($row=mysqli_fetch_array($result)) {
			echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['quantity']."</td></tr>";
		}
		
	}

?>
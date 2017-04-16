<?php
	

	include("connection.php");

	$query="select * from login where type='employee'";
	$result=mysqli_query($link, $query);
	$row=mysqli_fetch_array($result);
	if(isset($row))
	{
		$result=mysqli_query($link, $query);
		echo "<tr><th>Id<//th><th>Name<//th><th>Phone Number<//th><th>Sex<//th><th>Email Id<//th><//tr>";
		while($row=mysqli_fetch_array($result)) {
			echo "<tr><td>".$row['id']."<//td><td>".$row['name']."<//td><td>".$row['phone']."<//td><td>".$row['sex']."<//td><td>".$row['email']."<//td><//tr>";
		}
		
	}

?>
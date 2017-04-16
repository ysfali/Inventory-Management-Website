<?php

	session_start();

	include("connection.php");

	if(isset($_GET["logout"]) AND isset($_SESSION['id']))
	{
		session_destroy();
		$message="You have been logged out";
	}

	//echo "login";

	/*if($_POST['submit'])
	{*/
			$query="select * from login where username='".mysqli_real_escape_string($link,$_POST['username'])."' AND password='".md5(md5($_POST['username']).$_POST['password'])."' LIMIT 1";
			$result=mysqli_query($link, $query);
			$row=mysqli_fetch_array($result);
			//print_r($row);
			if(isset($row) AND $row['type']=='admin')
			{
				//Redirect to Admin page
				$_SESSION['id']=$row['id'];
				//print_r($_SESSION);
				echo "admin";
			}
			else if(isset($row) AND $row['type']=='employee')
			{
				//Redirect to Admin page
				$_SESSION['id']=$row['id'];
				//print_r($_SESSION);
				echo "employee";
			}
			else
			{
				echo "fail";
			}
		
	/*}
	else
	{
		echo "Not found";
	}*/
?>

<?php

	include("connection.php");

	if(isset($_POST['submit']))
	{
		$error="";
		$message="";
		if($_POST['empid']=="")
		{
			$error="Please enter a valid id.<br/>";
		}
		if($_POST['adusername']=="")
		{
			$error.="Please enter a valid Username<br/>";
		}
		if($_POST['adpassword']=="")
		{
			$error.="Please enter the password<br/>";
		}
		if(!$error)
		{
			$query1="select * from login where id='".mysqli_real_escape_string($link,$_POST['empid'])."'";
			$result1=mysqli_query($link, $query1);
			$row1=mysqli_fetch_array($result1);
			$query2="select * from login where username='".mysqli_real_escape_string($link,$_POST['adusername'])."' AND password='".mysqli_real_escape_string($link,md5(md5($_POST['adusername']).$_POST['adpassword']))."' AND type='admin'";
			$result2=mysqli_query($link, $query2);
			$row2=mysqli_fetch_array($result2);
			if($row1 AND $row2)
			{
				$query="DELETE FROM `login` WHERE id='".mysqli_real_escape_string($link,$_POST['empid'])."'";
				$result=mysqli_query($link, $query);
				$message="Employee Successfully Removed!";
			}
			if($row1==0)
			{
				$error.="Employee with this Id not found.<br/>";
			}
			if($row2==0)
			{
				$error.="Admin credentials wrongly entered. Please try again later.";
			}
		}
	}


?>
<?php
	include("connection.php");
	if(isset($_POST['submit']))
	{
		if($_POST['empname']=="")
		{
			$error="Please Enter the name of the Employee<br/>";
		}
		if($_POST['empusername']=="")
		{
			if(isset($error))
			$error.="Please enter a username<br/>";
			else
			$error="Please enter a username<br/>";
		}
		if($_POST['emppassword']=="")
		{
			if(isset($error))
			$error.="Please enter a Password<br/>";
			else
			$error="Please enter a Password<br/>";
		}
		if($_POST['empdob']=="")
		{
			if(isset($error))
			$error.="Please enter a valid Date of Birth<br/>";
			else
			$error="Please enter a valid Date of Birth<br/>";
		}
		if($_POST['empsex']!="Male" AND $_POST['empsex']!="Female")
		{
			if(isset($error))
			$error.="Please enter a valid sex<br/>";
			else
			$error="Please enter a valid sex<br/>";
		}
		if($_POST['empphone']=="")
		{
			if(isset($error))
			$error.="Please enter a phone number";
			else
			$error.="Please enter a phone number";
		}
		if(!isset($error))
		{
			$query="SELECT * from login where username='".mysqli_real_escape_string($link,$_POST['empusername'])."'";
			$result=mysqli_query($link, $query);
			$row=mysqli_fetch_array($result);
			if(isset($row))
			{
				$error="This Username is already taken. Please select a different one";
			}
			else
			{
				$query="INSERT INTO `login` (`name`,`phone`,`username`,`password`,`type`,`Date of Birth`,`sex`,`email`)
				VALUES ('".mysqli_real_escape_string($link,$_POST['empname'])."','".mysqli_real_escape_string($link,$_POST['empphone'])."', '".mysqli_real_escape_string($link,$_POST['empusername'])."',  '".mysqli_real_escape_string($link,md5(md5($_POST['empusername']).$_POST['emppassword']))."','employee','".mysqli_real_escape_string($link,$_POST['empdob'])."','".mysqli_real_escape_string($link,$_POST['empsex'])."','".mysqli_real_escape_string($link,$_POST['empemail'])."')";
				$result=mysqli_query($link, $query);
				$message="Congrats! Employee Added!";
			}
		}
	}


?>
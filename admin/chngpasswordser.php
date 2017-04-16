<?php

	include("connection.php");

	if(isset($_POST['submit']))
	{
		$error="";
		$message="";
		if($_POST['adusername']=="")
		{
			$error="Please enter your Username<br/>";
		}
		if($_POST['adpass']=="" OR $_POST['adpassword1']=="" OR $_POST['adpassword2']=="")
		{
			$error.="Please fill all the password fields<br/>";
		}
		if($_POST['adpassword1']!=$_POST['adpassword2'])
		{
			$error.="Passwords do not match.";
		}
		if(!isset($error))
		{
			$query1="select * from login where id='".mysqli_real_escape_string($link,$_SESSION['id'])."' AND username='".mysqli_real_escape_string($link,$_POST['adusername'])."' AND password='".mysqli_real_escape_string($link,md5(md5($_POST['adusername']).$_POST['adpass']))."'";
			$result1=mysqli_query($link, $query1);
			$row1=mysqli_fetch_array($result1);
			if(isset($row1))
			{
				$query="UPDATE  `login` SET  `password` = '".mysqli_real_escape_string($link,md5(md5($_POST['adusername']).$_POST['adpassword1']))."' WHERE  `id`='".mysqli_real_escape_string($link,$_SESSION['id'])."'";
				$result=mysqli_query($link,$query);
				$message="Password Successfully Changed!";
			}
			else
			{
				$error.="Admin credentials wrongly entered<br/>";
			}
		}
	}

?>
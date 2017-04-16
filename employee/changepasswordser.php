<?php

	session_start();

	include("connection.php");

	if(isset($_POST['submit']))
	{
		$message="";
		if($_POST['username']=="")
		{
			$error1="Please enter your Username<br/>";
		}
		if($_POST['password']=="" OR $_POST['newpassword1']=="" OR $_POST['newpassword2']=="")
		{
			$error2="Please fill all the password fields<br/>";
		}
		if($_POST['newpassword1']!=$_POST['newpassword2'])
		{
			$error3="Passwords do not match.";
		}
		if(!isset($error1) AND !isset($error2) AND !isset($error3))
		{
			$query1="select * from login where id='".mysqli_real_escape_string($link,$_SESSION['id'])."' AND username='".mysqli_real_escape_string($link,$_POST['username'])."' AND password='".mysqli_real_escape_string($link,md5(md5($_POST['username']).$_POST['password']))."'";
			$result1=mysqli_query($link, $query1);
			$row1=mysqli_fetch_array($result1);
			if(isset($row1))
			{
				$query="UPDATE  `login` SET  `password` = '".mysqli_real_escape_string($link,md5(md5($_POST['username']).$_POST['newpassword1']))."' WHERE  `id`='".mysqli_real_escape_string($link,$_SESSION['id'])."'";
				$result=mysqli_query($link,$query);
				$message="Password Successfully Changed!";
			}
			else
			{
				$error4="Employee credentials wrongly entered<br/>";
			}
		}
	}

?>
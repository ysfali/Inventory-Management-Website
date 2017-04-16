<?php
	session_start();
	include("connection.php");
	if(isset($_POST['submit']))
	{
		if($_POST['name']=='')
		{
			$error1="Please Enter your name";
		}
		if($_POST['dob']=="")
		{
			$error2="Please enter your date of birth";
		}
		if($_POST['phone']=="")
		{
			$error3="Please enter your phone number";
		}
		if(!$error1 AND !$error2 AND !$error3)
		{
			$query1="update login set name='".mysqli_real_escape_string($link,$_POST['name'])."', Date of Birth='".mysqli_real_escape_string($link,$_POST['dob'])."', email='".mysqli_real_escape_string($link,$_POST['email'])."', phone='".mysqli_real_escape_string($link,$_POST['phone'])."' where id='".mysqli_real_escape_string($link,$_SESSION['id'])."'";
            $result1=mysqli_query($link, $query1);
            $message="Done";
            echo "$message";
		}
	}

?>
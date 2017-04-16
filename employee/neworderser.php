<?php
session_start();
	include("connection.php");
	//print_r($_POST);
	if(isset($_POST['submit']))
	{
		$f1=0;
		$f2=0;
		$f3=0;
		$f4=0;
		$f5=0;
		$f6=0;
		if(isset($_POST['pd']) AND $_POST['pd']>0)
		{
			//echo "Pen Drive";
			$query="select quantity from product where name='Pen Drive'";
          	$result=mysqli_query($link, $query);
          	$row=mysqli_fetch_array($result);
          	if($row['quantity']<$_POST['pd'])
          	{
          		echo "Not enough Pen Drives available.<br/>";
          		$f1=1;
          	}
          	else
          	{
          		$query="select id from product where name='Pen Drive'";
          		$result=mysqli_query($link, $query);
          		$row=mysqli_fetch_array($result);
          		$p1=$row['id'];
          	}
		}
		if(isset($_POST['cd']) AND $_POST['cd']>0)
		{
			// "cd";
			$query="select quantity from product where name='CD'";
          	$result=mysqli_query($link, $query);
          	$row=mysqli_fetch_array($result);
          	if($row['quantity']<$_POST['cd'])
          	{
          		echo "Not enough CDs available.<br/>";
          		$f2=1;
          	}
          	else
          	{
          		$query="select id from product where name='CD'";
          		$result=mysqli_query($link, $query);
          		$row=mysqli_fetch_array($result);
          		$p2=$row['id'];
          	}
		}
		if(isset($_POST['mouse']) AND $_POST['mouse']>0)
		{
			//echo "mouse";
			$query="select quantity from product where name='Mouse'";
          	$result=mysqli_query($link, $query);
          	$row=mysqli_fetch_array($result);
          	if($row['quantity']<$_POST['mouse'])
          	{
          		echo "Not enough Mouse available.<br/>";
          		$f3=1;
          	}
          	else
          	{
				$query="select id from product where name='Mouse'";
          		$result=mysqli_query($link, $query);
          		$row=mysqli_fetch_array($result);
          		$p3=$row[0];
          	}
		}
		if(isset($_POST['keyboard']) AND $_POST['keyboard']>0)
		{
			//echo "keyboard";
			$query="select quantity from product where name='Keyboard'";
          	$result=mysqli_query($link, $query);
          	$row=mysqli_fetch_array($result);
          	if($row['quantity']<$_POST['keyboard'])
          	{
          		echo "Not enough Keyboard available.<br/>";
          		$f4=1;
          	}
          	else
          	{
          		$query="select id from product where name='Keyboard'";
          		$result=mysqli_query($link, $query);
          		$row=mysqli_fetch_array($result);
          		$p4=$row['id'];
          	}
		}
		if(isset($_POST['printer']) AND $_POST['printer']>0)
		{
			//echo "Printer";
			$query="select quantity from product where name='Printer'";
          	$result=mysqli_query($link, $query);
          	$row=mysqli_fetch_array($result);
          	if($row['quantity']<$_POST['printer'])
          	{
          		echo "Not enough Printer available.<br/>";
          		$f5=1;
          	}
          	else
          	{
          		$query="select id from product where name='Printer'";
          		$result=mysqli_query($link, $query);
          		$row=mysqli_fetch_array($result);
          		$p5=$row['id'];
          	}
		}
		if(isset($_POST['scanner']) AND $_POST['scanner']>0)
		{
			//echo "scanner";
			$query="select quantity from product where name='Scanner'";
          	$result=mysqli_query($link, $query);
          	$row=mysqli_fetch_array($result);
          	if($row['quantity']<$_POST['scanner'])
          	{
          		echo "Not enough Scanner available.<br/>";
          		$f6=1;
          	}
          	else
          	{
          		$query="select id from product where name='Scanner'";
          		$result=mysqli_query($link, $query);
          		$row=mysqli_fetch_array($result);
          		$p6=$row['id'];
          	}
		}
		if(!$f1 AND !$f2 AND !$f3 AND !$f4 AND !$f5 AND !$f6)
		{
			$query="select max(id) from `order`";
          	$result=mysqli_query($link, $query);
          	$row=mysqli_fetch_array($result);
          	$d=date('Y-m-d');
          	if($row[0]=="")
          	{
          		//echo "no entry";
          		$id=0;
          	}
          	else
          	{
          		//echo "hello";
          		$id=$row[0]+1;
          	}
          	if($f1==0 AND isset($p1))
          	{
          		$query="insert into `order` values (".$id.",'pending',".$p1.",".$_SESSION['id'].",".$_POST['pd'].",'".$d."')";
          		$result=mysqli_query($link, $query); 		
          		//echo date('Y-m-d');
          		//$row=mysqli_fetch_array($result);
          	}
          	if($f2==0 AND isset($p2))
          	{
          		$query="insert into `order` values (".$id.",'pending',".$p2.",".$_SESSION['id'].",".$_POST['cd'].",'".$d."')";
          		$result=mysqli_query($link, $query); 	
          	}
          	if($f3==0 AND isset($p3))
          	{
          		$query="insert into `order` values (".$id.",'pending',".$p3.",".$_SESSION['id'].",".$_POST['mouse'].",'".$d."')";
          		$result=mysqli_query($link, $query); 	
          	}
          	if($f4==0 AND isset($p4))
          	{
          		$query="insert into `order` values (".$id.",'pending',".$p4.",".$_SESSION['id'].",".$_POST['keyboard'].",'".$d."')";
          		$result=mysqli_query($link, $query); 	
          	}
          	if($f5==0 AND isset($p5))
          	{
          		$query="insert into `order` values (".$id.",'pending',".$p5.",".$_SESSION['id'].",".$_POST['printer'].",'".$d."')";
          		$result=mysqli_query($link, $query); 	
          	}
          	if($f6==0 AND isset($p6))
          	{
          		$query="insert into `order` values (".$id.",'pending',".$p6.",".$_SESSION['id'].",".$_POST['scanner'].",'".$d."')";
          		$result=mysqli_query($link, $query); 	
          	}
		}
	}
?>
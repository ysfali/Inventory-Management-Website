<?php
		  session_start();
          include("connection.php");
          //echo $_POST['cid'];
          //$query1="update `order` set status='resolved' where id='".$_POST['cid']."'";
          //$result1=mysqli_query($link, $query1);
          $query1="select * from `order` where id='".$_POST['cid']."' and status='pending'";
          $result1=mysqli_query($link, $query1);
          $sum=0;
          
          while($row=mysqli_fetch_array($result1))
          {
          	if($row['status']=='pending')
          	{
            $p=$row['pid'];
            $query2="select * from `product` where id='".$p."'";
          	$result2=mysqli_query($link, $query2);
          	$row2=mysqli_fetch_array($result2);
          	$x=$row2['quantity']-$row['pquantity'];
            $query3="update `product` set quantity=".$x." where id='".$p."'";
          	$result3=mysqli_query($link, $query3);
          	$query="update `order` set status='resolved' where id='".$_POST['cid']."' and pid='".$p."'";
          	$result=mysqli_query($link, $query);
          	$sum=$sum+$row['pquantity']*$row2['cost'];
          	}
          }
          if($sum!=0)
          {
          			//echo "sum is non zero";
          			$d=date('Y-m-d');
          			$query4="insert into bill (`cost`,`date`,`orderno`) values ('".$sum."','".$d."','".$_POST['cid']."')";
          			$result4=mysqli_query($link, $query4);
          }
          else
          {
          	//echo "sum is zero";
          }
          
          //print_r($row);
          //echo $a;
          //echo $p;
?>
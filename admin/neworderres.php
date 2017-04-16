<?php
		  include("connection.php");
    	  $query="select * from `order` where status='pending'";
          $result=mysqli_query($link, $query);
          if(!$result)
          {
            echo "Query not working";
          }
          $row=mysqli_fetch_array($result);
          
          if(isset($row))
          {
          	$x=0;
            $result=mysqli_query($link, $query);
            echo "<table class='table table-bordered'><tr><th class='center'>Order Id</th><th class='center'>Employee Id</th><th class='center'>Product Id</th><th class='center'>Quantity</th><th class='center'>Date</th><th class='center'>Status</th><th class='center'>Grant</th></tr>";
            while($row=mysqli_fetch_array($result)) {
            if($x==0 AND !isset($p))
            {
            	echo "<tr><td class='center'>".$row['id']."</td><td class='center'>".$row['eid']."</td><td class='center'>".$row['pid']."</td><td class='center'>".$row['pquantity']."</td><td class='center'>".$row['date']."</td><td class='center'>".$row['status']."</td><td class='center'><div class='make-switch'><input type='checkbox'  unchecked id='".$row['id']."'></div></td></tr>";
            	$p=$row['id'];
            	$x=1;
            }
            else if(isset($p) AND $p==$row['id'])
            {
            	echo "<tr><td class='center'></td><td class='center'></td><td class='center'>".$row['pid']."</td><td class='center'>".$row['pquantity']."</td><td class='center'></td><td class='center'></td></tr>";
            }
            else
            {
            	echo "<tr><td class='center'>".$row['id']."</td><td class='center'>".$row['eid']."</td><td class='center'>".$row['pid']."</td><td class='center'>".$row['pquantity']."</td><td class='center'>".$row['date']."</td><td class='center'>".$row['status']."</td><td class='center'><div class='make-switch'><input type='checkbox'  unchecked id='".$row['id']."'></div></td></tr>";
            	$x=0;
            	$p=$row['id'];
            }
            }
            echo "</table>";
          }
?>
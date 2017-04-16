<?php
          session_start();
          include("connection.php");
          $query="select * from `order` where eid='".$_SESSION['id']."'";
          $result=mysqli_query($link, $query);
          $row=mysqli_fetch_array($result);
          $print="";
          $x=-1;
          if(isset($row))
          {
            $result=mysqli_query($link, $query);
            while($row=mysqli_fetch_array($result)) {
              if($x!=$row['id'])
              {
                echo "<h5><strong>Order Number ".$row['id']."</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date : ".$row['date']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Status : ".$row['status']."</h5>";
                $x=$row['id'];
              }
              $query1="select name from `product` where id='".$row['pid']."'";
              $result1=mysqli_query($link, $query1);
              $pname=mysqli_fetch_array($result1);
              //print_r($pname);
              echo "<p>Product Id : ".$row['pid']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Product Name : ".$pname['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Product Quantity : ".$row['pquantity']."</p>";
              //print_r($row);
            }
            //echo "</table>";
          }
          else
          {
            echo "No Orders yet!";
          }
?>
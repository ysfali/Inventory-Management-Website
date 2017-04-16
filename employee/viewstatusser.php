<?php
          session_start();
          include("connection.php");
          $query="select * from complaint where eid='".$_SESSION['id']."'";
          $result=mysqli_query($link, $query);
          $row=mysqli_fetch_array($result);
          $print="";
          if(isset($row))
          {
            $result=mysqli_query($link, $query);
            echo "<table class='bordered'><tr><th>Complaint Id</th><th>About</th><th>Status</th></tr>";
            while($row=mysqli_fetch_array($result)) {
            echo "<tr><td>".$row['id']."</td><td>".$row['about']."</td><td>".$row['status']."</td></tr>";
            }
            echo "</table>";
          }
          else
          {
            echo "No Complaints lodged yet!";
          }
?>
<?php
          include("connection.php");
          $query="select * from complaint where status='pending'";
          $result=mysqli_query($link, $query);
          if(!$result)
          {
            echo "Query not working";
          }
          $row=mysqli_fetch_array($result);
          if(isset($row))
          {
            $result=mysqli_query($link, $query);
            echo "<table class='table table-bordered'><tr><th class='center'>Complaint Id</th><th class='center'>Employee Id</th><th class='center'>About</th><th class='center'>Dscription</th><th class='center'>Resolve</th></tr>";
            while($row=mysqli_fetch_array($result)) {
            echo "<tr><td class='center'>".$row['id']."</td><td class='center'>".$row['eid']."</td><td class='center'>".$row['about']."</td><td class='center'>".$row['description']."</td><td class='center'><div class='make-switch'><input type='checkbox'  unchecked id='".$row['id']."'></div></td></tr>";
            }
            echo "</table>";
          }
?>
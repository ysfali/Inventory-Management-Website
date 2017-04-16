<?php
		  session_start();
          include("connection.php");
          echo $_POST['cid'];
            $query1="update complaint set status='resolved' where id='".$_POST['cid']."'";
            $result1=mysqli_query($link, $query1);
?>
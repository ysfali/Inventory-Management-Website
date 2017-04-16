<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="logo.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FAYS Inventory</title>

    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    body{
      background-image: url(1.png);
      background-size: cover;
    }

    .mid{
      margin-left: 20px;
      margin-right: 20px;
    }
    .parallax{
      background-image: url(1.jpg);
      background-size: cover;
    }
    
    #view{
      background-color: #c5cae9;
      width: 50%;
      margin-top: 30px;
      border-radius: 30px;
      height: 50%;
      padding-bottom: 50px;
      opacity: 0.8;
    }
    .marginTop{
      margin-top: 40px;
    }

    </style>
  </head>


  <body>

    <div class="navbar-fixed">
      <nav>
        <div class="indigo lighten-4 nav-wrapper">
          <div class="container">
            <a href="mainpage.php" class="brand-logo">Inventory Management System</a>
            <a class="right" href="../index.php?logout=1">Log out</a>
         </div>
        </div>
      </nav>
    </div>

    <div class="navbar-fixed">
      <nav>
      <div class="teal nav-wrapper">
        <div class="container">
          
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
         <ul class="left hide-on-med-and-down center">
            <li>
              <a class='dropdown-button mid' href='#' data-activates='dropdown1'>Order Section</a>
              <ul id='dropdown1' class='dropdown-content'>
                <li><a class="waves-effect waves-light" href="neworder.php">New Order</a></li>
                <li><a class="waves-effect waves-light" href="viewhistory.php">View History</a></li>
              </ul>
            </li>
           <li>
            <a class='dropdown-button mid' href='#' data-activates='dropdown2'>Complaints Section</a>
              <ul id='dropdown2' class='dropdown-content'>
                <li><a class="waves-effect waves-light" href="newcomplaint.php">New Complaint</a></li>
                <li><a class="waves-effect waves-light" href="viewstatus.php">View Status</a></li>
              </ul>
           </li>
           <li>
            <a class='dropdown-button mid' href='#' data-activates='dropdown3'>Account Management</a>
              <ul id='dropdown3' class='dropdown-content'>
                <li><a class="waves-effect waves-light" href="changepassword.php">Change Password</a></li>
                <li><a class="waves-effect waves-light" href="updateprofile.php">Update Profile</a></li>
              </ul>
           </li>
           <li>
            <a  class="mid" href='viewprofile.php'>View Profile</a>
           </li>
          </ul>
          <!--<ul class="side-nav" id="mobile-demo">
           <li>
              <a class='dropdown-button mid' href='#' data-activates='dropdown1'>Order Section</a>
              
            </li>
           <li>
            <a class='dropdown-button mid' href='#' data-activates='dropdown2'>Complaints Section</a>
              
           </li>
           <li>
            <a class='dropdown-button mid' href='#' data-activates='dropdown3'>Account Management</a>
             
           </li>
           <li>
            <a  class="mid" href='#'>View Profile</a>
           </li>
         </ul>-->
       </div>
      </div>
    </nav>
  </div>

    <div class="container contentContainer" id="view">

    <br/>
      <h3 class="center marginTop">This is your profile!</h3>
        <?php

          include("connection.php");

          if(isset($_SESSION['id']))
          {
            $query="select * from login where id='".mysqli_real_escape_string($link,$_SESSION['id'])."'";
            $result=mysqli_query($link, $query);
            $row=mysqli_fetch_array($result);
            echo "<div class='row'><div class='col s3 offset-s3'><p><strong>Name : </strong></p></div><div class='col s2 offset-s1'><p>".$row['name']."</p></div></div>";
            echo "<div class='row'><div class='col s3 offset-s3'><p><strong>Username : </strong></p></div><div class='col s2 offset-s1'><p>".$row['username']."</p></div></div>";
            echo "<div class='row'><div class='col s3 offset-s3'><p><strong>Phone Number :</strong></p></div><div class='col s2 offset-s1'><p>".$row['phone']."</p></div></div>";
            echo "<div class='row'><div class='col s3 offset-s3'><p><strong>Sex : </strong></p></div><div class='col s2 offset-s1'><p>".$row['sex']."</p></div></div>";
            echo "<div class='row'><div class='col s3 offset-s3'><p><strong>Date of Birth : </strong></p></div><div class='col s2 offset-s1'><p>".$row['Date of Birth']."</p></div></div>";
          }

        ?>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>




     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


    <script>
      $(".contentContainer").css("min-height",$(window).height()*4/5);
      $(".button-collapse").sideNav();
       $('.collapsible').collapsible();
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
      $(document).ready(function(){
      $('.parallax').parallax();
    });
      $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });

    </script>
  </body>
</html>
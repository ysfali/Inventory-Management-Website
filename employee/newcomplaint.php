<?php

  session_start();
  include("connection.php");

  if(isset($_POST['submit']))
  {
    if($_POST['about']=='')
    {
      $error1="Please fill this field";
    }
    if($_POST['description']=="")
    {
      $error2="Please enter the description of your complaint";
    }
    if(!isset($error1) AND !isset($error2))
    {
      $query1="insert into complaint (`eid`,`about`,`description`,`status`) values('".mysqli_real_escape_string($link,$_SESSION['id'])."','".mysqli_real_escape_string($link,$_POST['about'])."','".mysqli_real_escape_string($link,$_POST['description'])."','pending')";
      $result1=mysqli_query($link, $query1);
      if(isset($result1))
      {
        $message="Complaint Submitted";
      }
      else
      {
        $error3="Sorry..There was an error. Please try later.";
      }
    }
  }
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

    .mid{
      margin-left: 20px;
      margin-right: 20px;
    }
    #view{
      background-image: url(2.jpg);
      background-size: cover;
      width: 100%;
      color: white;
    }
    .circular{
      border-radius: 4px;
    }
    p{
      background-color: #ef5350;
      border-radius: 4px;
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

    <div class="contentContainer center" id="view">
      <div class="row">
        <div class="col s6 offset-s3">
      <form method="post">
        <h5 class="center  green lighten-3 circular"><?php if(isset($message)){if($message!='')echo $message;} ?></h5>
        <h4 class="center">Enter your complaint</h4>
        <div class="input-field">
          <label for="about">About</label>
          <input type="text" class="validate" name="about" />
          <p class="center"><?php if(isset($error1)){if($error1!="") echo $error1;} ?></p>
        </div>
        <div class="input-field">
          <label for="text">Description</label>
          <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
          <p class="center"><?php if(isset($error2)){if($error2!="") echo $error2;} ?></p>
        </div>
        <p class="center"><?php if(isset($error3)){if($error3!="") echo $error3;} ?></p>
        <input type="submit" class="btn" value="Submit" name="submit" id="formsubmit"/>
      </form>
    </div>
  </div>
    </div>




     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


    <script>
      $(".contentContainer").css("min-height",$(window).height());
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
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year
        format: 'dd/mm/yyyy'    
    });

    </script>
  </body>
</html>
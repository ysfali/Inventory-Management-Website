<?php

  session_start();
  include("connection.php");

  if(isset($_POST['submit']))
  {
    if($_POST['name']=='')
    {
      $error1="Please Enter your name";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format"; 
    }
    if($_POST['phone']=="")
    {
      $error2="Please enter your phone number";
    }
    if(!$_POST['dob'])
    {
      $error3="Please enter your Date of Birth";
    }
    if(!isset($error1) AND !isset($error2) AND !isset($error3) AND !isset($emailErr))
    {
      $query1="update login set `name`='".mysqli_real_escape_string($link,$_POST['name'])."', `email`='".mysqli_real_escape_string($link,$_POST['email'])."', `phone`='".mysqli_real_escape_string($link,$_POST['phone'])."' , `Date of Birth`='".mysqli_real_escape_string($link,$_POST['dob'])."' where `id`='".mysqli_real_escape_string($link,$_SESSION['id'])."'";
      $result1=mysqli_query($link, $query1);
      if(isset($result1))
      {
        $message="Profile Updated!";
      }
      else
      {
        $error4="Sorry..There was an error. Please try later.";
      }
    }
  }

  $query="select * from login where id='".mysqli_real_escape_string($link,$_SESSION['id'])."'"; 
  $result=mysqli_query($link, $query);
  $row=mysqli_fetch_array($result);
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
      height: 100%;
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
        <h4 class="center">Edit your credentials</h4>
        <div class="input-field">
          <label for="name">Name</label>
          <input type="text" class="validate" name="name" value="<?php echo $row['name'] ?>" />
          <p class="center"><?php if(isset($error1)){if($error1!="") echo $error1;} ?></p>
        </div>
        <div class="input-field">
          <label for="email">Email</label>
          <input type="email" class="validate" name="email" value="<?php echo $row['email'] ?>" />
          <p class="center"><?php if(isset($emailErr)){echo $emailErr;} ?></p>
        </div>
        <div class="input-field">
          <label for="phone">Phone Number</label>
          <input type="text" class="validate" name="phone" value="<?php echo $row['phone'] ?>" />
          <p class="center"><?php if(isset($error2)){if($error2!="")echo $error2;} ?></p>
        </div>
        <div class="input-field">
          <label for="dob">Date of Birth</label>
          <input type="text" class="validate datepicker" name="dob" value="<?php echo $row['Date of Birth'] ?>" />
          <p class="center"><?php if(isset($error3)){if($error3!="")echo $error3;} ?></p>
        </div>
        <p class="center"><?php if(isset($error4)){if($error4!="")echo $error4;} ?></p>
        <input type="submit" class="btn" value="Update" name="submit" id="formsubmit"/>
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
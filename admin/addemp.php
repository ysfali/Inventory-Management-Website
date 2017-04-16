<?php
  session_start();
  include("addemployee.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FAYS Inventory</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <style>
      body{
        background-color: black;
      }
      #myCarousel{
        height: 100%;
      }
      .navbar-brand{
        font-size: 200%;
      }
      .bold{
        font-weight: bold;
      }
      .marginTop{
        margin-top: 60px;
      }
      .center{
        text-align: center;
      }
      .title{
        margin-top: 100px;
        font-size: 300%;
        font-weight: bold;
      }
      .marginLeft1{
        margin-left: 80px;
      }
      .marginLeft{
        margin-left: 12px;
        margin-right: 12px;
      }
      .img{
        background-size: cover;
      }
      #about{
        background-color: black;
        margin:0;
        width: 100%;
      }
      #home{
        width: 100%;
      }
      .white{
        color:white;
      }
      li:hover{
        background-color: #CCCCCC;
      }
      .dropdown .dropdown-menu{
        opacity: 0;
        transition:         all 400ms ease;
        -moz-transition:    all 400ms ease;
        -webkit-transition: all 400ms ease;
        -o-transition:      all 400ms ease;
        -ms-transition:     all 400ms ease;
      }
      .dropdown:hover .dropdown-menu {
        display: block;
        opacity: 1;
      }
      .jumbotron{
        background-image: url(background.jpg);
        background-size: cover;
        background-cover:center;
      }

    </style>
  </head>


  <body data-spy="scroll" data-target=".navbar-collapse">
    
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="mainpage.php" class="navbar-brand">Welcome Admin</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
              
            <div class="btn-group pull-right">
            <a class="btn btn-warning navbar-btn" href="../index.php?logout=1">Log Out</a>
            </div>
          </div>
        </nav>

        <nav class="navbar navbar-default marginTop">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Do your Duty</a>
            </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle marginLeft" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employee Management<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="addemp.php">Add Employee</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="rememp.php">Remove Employee</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="seeemp.php">See All Employees</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle marginLeft" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stock Management<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="reviewstock.php">Review Stock</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="neworder.php">New Order</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="billdetails.php" class="marginLeft">Billing</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle marginLeft" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Complaints<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="resolved.php">Resolved</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="pending.php">Pending</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle marginLeft" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Edit profile<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="changepassword.php">Change Password</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="editdetails.php">Edit Details</a></li>
                </ul>
              </li>
              
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="container contentContainer">
        <div class="jumbotron white">
          <h1 class="center">Add Employee</h1>
          <p class="lead center marginTop">Enter details of the Employee</p>
          
            <?php
              if(isset($error))
              {
                echo "<p class='alert alert-danger'>".$error."</p>";
              }
              if(isset($message))
              {
                echo "<p class='alert alert-success'>".$message."</p>";
              }
            ?>

        
          <form method="post">
            <div class="form-group">
              <label for="empname">Employee Name</label>
              <input type="text" name="empname" class="form-control" value="<?php if(isset($_POST['empname']))echo $_POST['empname'] ?>"/>
            </div>
            <div class="form-group">
              <label for="empusername">Username</label>
              <input type="text" name="empusername" class="form-control" value="<?php if(isset($_POST['empusername']))echo $_POST['empusername'] ?>"/>
            </div>
            <div class="form-group">
              <label for="emppassword">Password</label>
              <input type="password" name="emppassword" class="form-control" value="<?php if(isset($_POST['emppassword']))echo $_POST['emppassword'] ?>"/>
            </div>
            <div class="form-group">
              <label for="empemail">Email</label>
              <input type="email" name="empemail" class="form-control" value="<?php if(isset($_POST['empemail']))echo $_POST['empemail'] ?>"/>
            </div>
            <div class="form-group">
              <label for="empdob">Date of birth</label>
              <input type="date" name="empdob" class="form-control" value="<?php if(isset($_POST['empdob']))echo $_POST['empdob'] ?>"/>
            </div>
            <div class="form-group">
              <label for="empsex">Sex</label>
              <input type="text" list="Sex" name="empsex" class="form-control" value="<?php if(isset($_POST['empsex']))echo $_POST['empsex'] ?>"/>
              <datalist id="Sex">
                <option value="Male"></option>
                <option value="Female"></option>
              </datalist>
            </div>
            <div class="form-group">
              <label for="empphone">Phone Number</label>
              <input type="text" name="empphone" class="form-control" value="<?php if(isset($_POST['empphone']))echo $_POST['empphone'] ?>"/>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="form-control btn btn-info">
            </div>
          </form>
        </div>
      </div>
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


    <script>
      $(".jumbotron").css("min-height",$(window).height());
    </script>
  </body>
</html>
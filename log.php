<?php

  include("login.php");

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

    <style>
      p{
        border-radius: 2px;
      }

      body{
        background-image: url(login.jpg);
        background-size: cover;
        color: white;
      }

      .container{
        width: 40%;
        height: 150%;
        border-radius: 5px;
        margin-top: 70px;
        opacity: 0.8;
      }

    </style>
  </head>


  <body>
<h4 class="center">Sign In</h4>

        <div class="container grey lighten-2">
              
              <div class="row">
                <div class="col s8 offset-s2">
              <form method="post">
                    <div class="input-field">
                      <label for="username">Username</label>
                      <input type="text" class="validate" name="username" id="username" value="<?php echo $_POST['username'] ?>" />
                      <p id="usernameerror" class="red"><?php if($error1){echo $error1;} ?></p>
                    </div>
                
                    <div class="input-field">
                      <label for="password">Password</label>
                      <input type="password" class="validate" name="password" id="password" value="<?php echo $_POST['password'] ?>" />
                      <p id="passworderror" class="red"><?php if($error2){echo $error2;} ?></p>
                    </div>
                  <p id="matcherror" class="red"><?php if($error3){echo $error3;} ?></p>
                  <input type="submit" class="btn" value="Sign In" name="submit" id="formsubmit"/>
              </form>
               <a href="index.php" class="waves-effect waves-green btn-flat right">Back</a>
          </div>
        </div>
      </div>
      </div>







      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


    <script>
      $(".contentContainer").css("min-height",$(window).height());
      $(".button-collapse").sideNav();
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      });
      $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>
  </body>
</html>
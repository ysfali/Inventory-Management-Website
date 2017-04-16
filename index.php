

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
      #parallax1{
        margin-top: 50px;
        background-size: cover;
        width: 100%;
      }

      .card{
        width: 70%;
      }
      body{
        background-color: #eceff1;
      }

      #myModal{
        width: 500px;
      }
      p{
        border-radius: 4px;
      }

    </style>
  </head>


  <body>

    <div class="navbar-fixed">
      <nav>
      <div class="indigo lighten-4 nav-wrapper">
        <div class="container">
          <a href="#" class="center brand-logo">Inventory Management System</a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <a class="right modal-trigger" data-target="myModal" href="#myModal">Login</a>
         <!--<ul class="left hide-on-med-and-down">
            <li><a href="#home">Home</a></li>
           <li><a href="#about">About</a></li>
          </ul>
         <ul class="side-nav" id="mobile-demo">
           <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
         </ul>-->
       </div>
      </div>
    </nav>
  </div>
        
  <div class="parallax-container parallax1 section scrollspy contentContainer" id="home">

    <div class="parallax"><img src="inv.png"></div>

  </div>

  

  


    

    <!--Admin Login Dialog Box Starts-->
      <div class="modal" id="myModal">
          <div class="modal-content">
              <h4 class="modal-title">Sign In</h4>
              <p id="useralert" style="display:none" class="red center">Username and Password dont match!. Please try again later.</p>
              <form method="post" id="idform">
                  <div class="row">
                    <div class="input-field col s12">
                      <label for="username">Username</label>
                      <input type="text" class="validate" name="username" id="username" />
                      <p id="usernameerror" class="red center" style="display:none">Enter your username</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label for="password">Password</label>
                      <input type="password" class="validate" name="password" id="password" />
                      <p id="passworderror" class="red center" style="display:none">Enter your password</p>
                    </div>
                  </div>
                  <input type="submit" class="btn" value="Sign In" name="submit"/>
              </form>
            <div class="modal-footer">
               <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
          </div>
      </div>

    <!--Login Dialog Box Ends-->

    
   
    

    
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


    <script>
      $(".contentContainer").css("min-height",$(window).height());
      $(".button-collapse").sideNav();
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        //$('.modal-trigger').leanModal();
        $('.modal-trigger').leanModal({
          dismissible: false, // Modal can be dismissed by clicking outside of the modal
          opacity: .5, // Opacity of modal background
          in_duration: 300, // Transition in duration
          out_duration: 200, // Transition out duration
          //ready: function() { alert('Ready'); }, // Callback for Modal open
          //complete: function() { alert('Closed'); } // Callback for Modal close
          }
        );
        $(document).ready(function(){
        $('.parallax').parallax();
        });
        
        
        $("#idform").submit(function(event){
        event.preventDefault();
        var username=$("#username").val();
        var password=$("#password").val();
        var flag1=0,flag2=0;
          if(username=="")
          {
            flag1=1;
            $("#usernameerror").show();
          }
          else
          {
            flag1=0;
            $("#usernameerror").hide();
          }
          if(password=="")
          {
            flag2=1;
            $("#passworderror").show();
          }
          else
          {
            flag2=0;
            $("#passworderror").hide();
          }
          if(flag1==0 && flag2==0)
          {
            //$("#useralert").html("Submitting");
            $("#useralert").hide();
            $.ajax({
              type: "POST",
              url: "login.php",
              data: $("#idform").serialize(),
              success: function(data){
                //alert(data);
                if(data=="admin")
                {
                 //alert("admin");
                 $("#useralert").hide();
                 window.location.href = "./admin/mainpage.php";
                }
                else if(data=="employee")
                {
                  //alert("employee");
                  $("#useralert").hide();
                  window.location.href = "./employee/mainpage.php";
                }
                else if(data=="fail")
                {
                  $("#useralert").show();
                }
              }
            });
          }
        });
      });
      
    </script>
  </body>
</html>
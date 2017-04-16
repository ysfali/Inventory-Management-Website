
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
    .parallax{
      background-image: url(emp2.jpg);
      background-size: cover;
    }
    .marginTop{
      margin-top: 50px;
    }
    img{
      width:250px;
      height:250px;
      background-size: cover;
    }
    .marginBottom{
      margin-bottom: 50px;
    }
    #error,#success{
      border-radius: 3px;
      font-weight: bold;
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

      <div class="container">

        

        <div class="row marginTop">

          <div class="col s4 center">
            <div class="card">
              <div class="card-content">
                <h5 class="card-title black">Pen Drive</h5>
                <p><img src="1.png"></p>
              </div>
              <div class="container">
                <form method="post">
                  <div class="input-field">
                    <label for="scanner">Quantity</label>
                   <input type="number" class="validate center" name="Pen Drive" id="pd" value="0" />
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col s4 center">
            <div class="card">
              <div class="card-content">
                <h5 class="card-title black">CD</h5>
                <p><img src="1.png"></p>
              </div>
              <div class="container">
                <form method="post">
                  <div class="input-field">
                    <label for="scanner">Quantity</label>
                   <input type="number" class="validate center" name="CD" id="cd" value="0" />
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col s4 center">
            <div class="card">
              <div class="card-content">
                <h5 class="card-title black">Mouse</h5>
                <p><img src="1.png"></p>
              </div>
              <div class="container">
                <form method="post">
                  <div class="input-field">
                    <label for="scanner">Quantity</label>
                   <input type="number" class="validate center" name="Mouse" id="mouse" value="0" />
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>

        <div class="row marginTop">

          <div class="col s4 center">
            <div class="card">
              <div class="card-content">
                <h5 class="card-title black">Keyboard</h5>
                <p><img src="1.png"></p>
              </div>
              <div class="container">
                <form method="post">
                  <div class="input-field">
                    <label for="scanner">Quantity</label>
                   <input type="number" class="validate center" name="Keyboard" id="keyboard" value="0" />
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col s4 center">
            <div class="card">
              <div class="card-content">
                <h5 class="card-title black">Printer</h5>
                <p><img src="1.png"></p>
              </div>
              <div class="container">
                <form method="post">
                  <div class="input-field">
                    <label for="scanner">Quantity</label>
                   <input type="number" class="validate center" name="Printer" id="printer" value="0" />
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col s4 center">
            <div class="card">
              <div class="card-content">
                <h5 class="card-title black">Scanner</h5>
                <p><img src="1.png"></p>
              </div>
              <div class="container">
                <form method="post">
                  <div class="input-field">
                    <label for="scanner">Quantity</label>
                   <input type="number" class="validate center" name="Scanner" id="scanner" value="0" />
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>

        <div class="center marginBottom">
          <p id="error" class="center red"></p>
          <p id="success" class="center green"></p>
          <form method="post">
            <input class="btn" name="submit" type="submit" value="Submit" id="submit"/>
          </form>
        </div>

      </div>




     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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
      $(document).ready(function(){
        $("#submit").click(function(event){
          event.preventDefault();
          var f1=0,f2=0,f3=0,f4=0,f5=0,f6=0;
          var pd=$("#pd").val();
          var cd=$("#cd").val();
          var mouse=$("#mouse").val();
          var keyboard=$("#keyboard").val();
          var printer=$("#printer").val();
          var scanner=$("#scanner").val();
          if(pd==0)
          {
            f1=1;
          }
          if(cd==0)
          {
            f2=1;
          }
          if(mouse==0)
          {
            f3=1;
          }
          if(keyboard==0)
          {
            f4=1;
          }
          if(printer==0)
          {
            f5=1;
          }
          if(scanner==0)
          {
            f6=1;
          }
          if(f1==1 && f2==1 && f3==1 && f4==1 && f5==1 && f6==1)
          {
            $("#error").html("Enter Correct Quantity").block();
            $("#success").hide();
          }
          else
          {
            $("#error").hide();
            
            //alert("hello");

            $.ajax({
              type:"POST",
              url:"neworderser.php",
              data: 
                'pd='+pd+ 
                '&cd='+cd+
                '&mouse='+mouse+
                '&keyboard='+keyboard+
                '&printer='+printer+
                '&scanner='+scanner+
                '&submit=1'
              ,
              success:function(data){
                //alert(data);
                if(data!="")
                {
                  $("#error").html(data);
                  $("#error").show();
                  //alert(data);
                }
                else
                {
                  $("#error").hide();
                  $("#success").html("Your order was successfully done. Please wait for the manager to approve it.").block();
                }
              }
            });
            }
        });
      });
    </script>
  </body>
</html>
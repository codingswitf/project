<?php
include 'CheckNotMember.php'; 


?>
<!DOCTYPE html>
<html lang="en"><head>
  <title>Add Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-2.2.0.min"></script>
  <script src="js/bootstrap.min.js"></script>
 
    
 

    
        <link rel="stylesheet" href="css/style.css">


    


  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
	  background-color: #f2f2f2;
      padding: 25px;
    }
	body,html{
	height:100%;	
	}
	#All{
	height:100%;	
	}
  </style>
</head>
<body>
<div id="All">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="ManageContent.php">ManageContent</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="CreateContent.php">CreateContent</a></li>

        <li><a href="signup.php">Add Admin</a></li>
        <li><a>|</a></li>
          <li><a href="logout.php"> log out</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="float:right; margin-right:30px; margin-top:5px; color:#4141FE;">
<?php if($nameAd && $lnameAd){ echo "Welcome ".$nameAd." ".$lnameAd ; }?>
</div><!-- admin name -->

    <div class="form">
   
      
    
        <div id="signup">   
          <h1>Add Admin</h1>
          
          <form action="CheckRegis.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="FirstName" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="LastName" required autocomplete="off"/>
            </div>
          </div>
          

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="Email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="Password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
      
      
      </div>
      
</div> <!-- /form -->

<footer class="container-fluid text-center">
  <h3>This Page For Admin Only !!</h3>
</footer>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>

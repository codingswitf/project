<?php
include 'CheckNotMember.php'; 


$nameAd =$_SESSION['name']; 
$lnameAd= $_SESSION['lastname'];


//echo $nameAd;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ManageContent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-2.2.0.min"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
  

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .All{
    	height: 100%;
    	
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
          <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
       
  <li><a href="CreateContent.php">CreateContent</a></li>

        <li><a href="signup.php">Add Admin</a></li>
        <li><a>|</a></li>
          <li><a href="logout.php"> log out</a></li>
  </div>
</nav>
      </ul>
    </div>
  </div>
</nav>
<div style="float:right; margin-right:30px; margin-top:5px; color:#4141FE;">
<?php if($nameAd && $lnameAd){ echo "Welcome ".$nameAd." ".$lnameAd ; }?>
</div><!-- admin name -->
<center>

<div class="container" style="margin-top:20px;">
  <h1>Manage Content</h1>
     
  <br>     
  <table class="table table-hover" >
    <thead>
      <tr>
        <th style="text-align:center;"><h3>List Content</h3></th>
      </tr>
    </thead>
    <tbody>
    <?php
	
	include 'querycontent.php';
	while($row = mysqli_fetch_assoc($result)){
		
	?>
      <tr>
        <td align="center"><a href="EditContent.php?id=<?php echo $row['dataID']; ?>"><?php echo $row['title']; ?></a><font style="float:right;" ><a href="DelCon.php?id=<?php echo $row['dataID'];?>">DELETE</a></font></td>
      </tr>
    <?php
	}
	?>
    </tbody>
  </table>
</div>

</center>

</div>


</div><!-- all -->



<footer class="container-fluid text-center">
  <h3>This Page For Admin Only !!</h3>
</footer>

</body>
</html>

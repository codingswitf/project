<?php
include 'CheckNotMember.php'; 


include 'querycontentID.php';
$nameAd =$_SESSION['name']; 
$lnameAd= $_SESSION['lastname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EditContentt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-2.2.0.min"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
  
  <script src="ckeditor/ckeditor.js"></script>

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
<center>

<div style="margin-top:15px; width:70%;" >
<?php


?>
  <form action="UpdateContent.php" method="post" enctype="multipart/form-data">
    <div class="field-wrap">
              <label>
                Title<span class="req">*</span>
              </label>
              <input type="text" name="title" value="<?php echo $data['title'];?>">
              
              
              
           </div>
            <br><table>
            <tr>
            <td> Picture : <input type="file" name="filUpload"></td>
            <td>
            <img src="data:image/png;base64,<?php echo $data['pic'];?>" style="width:200px;"></td>
           </tr>
           </table>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
               <?php
			   echo $data['detail'];
			   
			   ?>
            </textarea>
            
            <input name="id" type="hidden" value="<?php echo $id;?>">
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            <br>
            <input name="" class="btn btn-success" type="submit">
        </form>
        </div>
</center>
</div>
</div>
<footer class="container-fluid text-center">
  <h3>This Page For Admin Only !!</h3>
</footer>

</body>
</html>

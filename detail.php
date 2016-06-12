<!doctype html>

<html lang ="th">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X=UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="A basic Hello World example for bootstrap">
      <meta name="author" content="Your Name">
      <title>Test</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <link href="css/custom.css" rel="stylesheet">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></sapn>
          <span class="icon-bar"></sapn>
            <span class="icon-bar"></sapn>
      </button>
      <a class="navbar-brand" href="#">Franky</a>
    </div>
  </div>
    </div>
    </div>
    
    <thead>
         <tr>
           <?php
           $servername = "sql6.freesqldatabase.com";
           $username = "sql6117117";
           $password = "jBdzlc1xTi";
           $dbname = "sql6117117";
           // Create connection
           $conn = new mysqli($servername, $username, $password, $dbname);
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
           //$dataID = $_POST["id"];
           $dataID = "31";
           $sql = "SELECT detail FROM `datatable` WHERE dataID = '".$dataID."' ";
           $conn->query("SET names utf8");
           $myArray = array();
           $result = $conn->query($sql);
             while($row = $result->fetch_array(MYSQL_ASSOC)){
                 echo $row["detail"];
             }
           $conn->close();
           ?>
           <font color="red"><center><?php echo $row; ?></center></font>
           // <th style="text-align:center;"><h3><?php echo $row; ?></h3></th>
         </tr>
       </thead>
</body>
</html>

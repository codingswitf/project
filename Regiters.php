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
$dataID = $_POST["id"];
//$dataID = "31";
$str = "Hello";
echo md5($str);
$sql = "SELECT detail FROM `datatable` WHERE dataID = '".$dataID."' ";
$conn->query("SET names utf8");
$myArray = array();
$result = $conn->query($sql);
  while($row = $result->fetch_array(MYSQL_ASSOC)){
      $myArray[]=$row;
  }
echo json_encode($myArray,JSON_UNESCAPED_UNICODE);
$conn->close();
?>

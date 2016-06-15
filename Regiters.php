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
//$email = $_POST["email"];
//$password = $_POST["Password"];
//$name = $_POST["name"];
//$lastname = $_POST["lastname"];
$email = "Wutthiphorn@gmail.com"
$password = "123456789"
$name = "Frankys"
$lastname = "Cha-em"
//$dataID = "31";
//$str = "Hello";
//echo md5($str);
$strSQL = "INSERT INTO member (name,lastname,email,password) VALUES ('".$name."','".$lastname."','".$email."','".$password."')";

$conn->query("SET names utf8");
$result = $conn->query($strSQL);
$conn->close();
?>

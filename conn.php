<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6117117";
$password = "jBdzlc1xTi";
$dbname = "sql6117117";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
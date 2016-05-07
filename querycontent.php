<?php
include 'CheckNotMember.php'; 


include 'conn.php';

$sql = "select * from datatable";
	mysqli_set_charset($conn,"utf8");
$result = mysqli_query($conn,$sql);
if(!$result){
echo "Something Wrong!!";
}

?>
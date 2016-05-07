<?php

include 'CheckNotMember.php'; 



include 'conn.php';
$id = $_GET['id'];
$sql = "select * from datatable where dataID = '$id'";
	mysqli_set_charset($conn,"utf8");
$result = mysqli_query($conn,$sql);
if(!$result){
echo "Something Wrong!!";
}
else{
$data =mysqli_fetch_assoc($result);	
	
}

?>
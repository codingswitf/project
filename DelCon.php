<?php

if($_GET['id']){
$id =  $_GET['id'];
//echo $id;
include 'conn.php';
$sql ="DELETE FROM datatable
WHERE dataID='$id'";

$R = mysqli_query($conn,$sql);
if(!$R){
//echo $id;
			?>
    <script>
	alert("SomeThing Wrong !!");
	window.location = "ManageContent.php";

	</script>
    <?php
}
else{
		?>
    <script>
	alert("Success !!");
	window.location =  "ManageContent.php";
	</script>
    <?php	
	
}
}
?>

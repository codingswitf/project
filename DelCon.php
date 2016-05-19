<?php

if($_GET['id']){
include 'conn.php';
$sql ="DELETE FROM datatable
WHERE dataID='$id'";
echo $id;
$R = mysqli_query($conn,$sql);
if(isset($R)){
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

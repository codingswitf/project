<?php

include 'CheckNotMember.php'; 



$editor = $_POST['editor1'];
$title = $_POST['title'];
$id =$_SESSION['idAd'];
//echo $editor." ".$title." ".$id;
if(!$editor || !$title || $_FILES["filUpload"]["name"] == ""){
		
		?>
    <script>
	alert("Try Again !!");
	window.location = "CreateContent.php";
	</script>
    <?php
	
	
}
else{
	$dt =date_default_timezone_set('Asia/Bangkok');
	$dt = date("Y-m-d H:i:s");  
	include 'conn.php';
	//*** Read file BINARY ***'

$fp = fopen($_FILES["filUpload"]["tmp_name"],"r");

$ReadBinary = fread($fp,filesize($_FILES["filUpload"]["tmp_name"]));

fclose($fp);

$FileData = $ReadBinary;
$FileData = base64_encode($FileData);
	$sql = "INSERT INTO datatable (title,detail,datet,id,pic)
	VALUES ('$title','$editor','$dt','$id','$FileData');";
	
	mysqli_set_charset($conn,"utf8");
	$result = mysqli_query($conn,$sql);
	if($result){
			?>
    <script>
	alert("Insert Content Success !!");
	window.location = "ManageContent.php";
	</script>
    <?php
	}
	else{
				?>
    <script>
	alert("Some Thing Wrong !!");
	window.location ="CreateContent.php";
	</script>
    <?php
	}
	
	
	
}

?>
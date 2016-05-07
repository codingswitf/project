<?php

include 'CheckNotMember.php'; 



$editor = $_POST['editor1'];
$title = $_POST['title'];
$id =$_POST['id'];

$idAd = $_SESSION['idAd'];
//echo $_SESSION['idAd'];
date_default_timezone_set('Asia/Bangkok');
$dt = date('Y/m/d H:i:s ', time());
//echo $editor." ".$title." ".$id." ".$idAD." ".$dt;
if(!$editor || !$title || $_FILES["filUpload"]["name"] == ""){
		
		?>
    <script>
	alert("Try Again !!");
	window.location = "EditContent.php?id=<?php echo $id;?>";
	</script>
    <?php
	
	
}
else{
	
	include 'conn.php';
	$fp = fopen($_FILES["filUpload"]["tmp_name"],"r");

$ReadBinary = fread($fp,filesize($_FILES["filUpload"]["tmp_name"]));

fclose($fp);

$FileData = $ReadBinary;
$FileData = base64_encode($FileData);
	$sql = "UPDATE datatable
SET title = '$title', detail = '$editor', datet = '$dt', id = '$_SESSION[idAd]',pic = '$FileData'
WHERE dataID = '$id'";
//echo $sql;
	mysqli_set_charset($conn,"utf8");
	$result = mysqli_query($conn,$sql);
	if($result){
			?>
    <script>
	alert("Edit Content Success !!");
	window.location = "ManageContent.php";
	</script>
    <?php
	}
	else{
				?>
    <script>
	alert("Some Thing Wrong !!");
	window.location ="EditContent.php?id=<?php echo $id;?>";
	</script>
    <?php
	}
	
	
	
}

?>
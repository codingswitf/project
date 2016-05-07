<?php
session_start();

$email =$_POST['Email'];
$pass = $_POST['Password'];

if(!$email || !$pass){
	?>
    <script>
	alert("Please Login Again !!");
	window.location = "login.html";
	</script>
    <?php
	
}
else{
	
	include 'conn.php';
	$pass = md5($pass);
	$sql = "select * from register where email = '$email' and password = '$pass'";
	mysqli_set_charset($conn,"utf8");
	$result = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($result);
	if($data){
		$_SESSION['name'] = $data['name'];
		$_SESSION['lastname'] = $data['lastname'];
		$_SESSION['idAd'] = $data['id'];
		//echo $_SESSION['idAd'];
		//echo $_SESSION['name'] ;
		?>
    <script>
	alert("Login Success !!");
	window.location = "ManageContent.php";
	</script>
    <?php
		
		
	}//have data
	
	else{
	?>
    <script>
	alert("Invalid Email or Password !!");
	window.location = "login.html";
	</script>
    <?php	
		
	}
	
}

?>
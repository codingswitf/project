<?php
$name = $_POST['FirstName'];
$Lname = $_POST['LastName'];
$email =$_POST['Email'];
$pass = $_POST['Password'];

//echo $name." ".$Lname." ".$email." ".$pass;
if(!$name || !$Lname || !$email || !$pass){
		
		?>
    <script>
	alert("Please Sign up Again !!");
	window.location = "signup.php";
	</script>
    <?php
	
	
}
else{
	include 'conn.php';
	$pass = md5($pass);
	$sql = "INSERT INTO register (name,lastname,email,password)
	VALUES ('$name','$Lname','$email','$pass');";
	mysqli_set_charset($conn,"utf8");
	$result = mysqli_query($conn,$sql);
	if($result){
			?>
    <script>
	alert("Register Success !!");
	window.location = "ManageContent.php";
	</script>
    <?php
	}
	else{
				?>
    <script>
	alert("Some Thing Wrong !!");
	window.location ="signup.php";
	</script>
    <?php
	}
	
	
	
}

?>
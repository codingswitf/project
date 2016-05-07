<?php
session_start();
if(!$_SESSION['idAd']){
	
			?>
    <script>
	alert("Please Login !!");
	window.location = "login.html";
	</script>
    <?php
	
}

?>
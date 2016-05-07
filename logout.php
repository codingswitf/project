<?php
session_start();



 
echo "<SCRIPT type='text/javascript'>
        alert('Log Out Success !!');
        window.location='login.html';
    </SCRIPT>";
session_destroy();
 ?>
 <meta charset='utf-8'>
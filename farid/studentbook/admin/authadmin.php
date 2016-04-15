<?php
	
	//Check whether the session variable adminusername is present or not
	if(!isset($_SESSION['admin_username']) || (trim($_SESSION['admin_username']) == '')) {
		header("location:denie.php");
		exit();
	}
?>
<link rel="shortcut icon" href="http://studentbook.itmind4u.com/images/logos.png" />
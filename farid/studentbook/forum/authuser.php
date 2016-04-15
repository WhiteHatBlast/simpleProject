<?php
	//Start session
	session_start();
	
	//Check whether the session variable adminusername is present or not
	if(!isset($_SESSION['user_username']) || (trim($_SESSION['user_username']) == '')) {
		header("location: ../user/home/denie");
		exit();
	}
?>
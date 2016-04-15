<?php
	//Start session
	session_start();
	
	//Check whether the session variable adminusername is present or not
	if(!isset($_SESSION['admin_username']) || (trim($_SESSION['admin_username']) == ''))
	{
		header("location: denie");
		exit();
	}
	
	
?>
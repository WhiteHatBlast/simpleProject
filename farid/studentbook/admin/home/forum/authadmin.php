<?php

session_start();
if(!isset($_SESSION['admin_username']) || (trim($_SESSION['admin_username']) == '')) {
		header("location:denie.php");
		exit();
	}
	?>
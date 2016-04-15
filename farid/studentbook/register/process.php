<?php

	//Include database connection details
	require_once('connectmysql.php');

$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

	
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$nickname = clean($_POST['nickname']);
	$age = clean($_POST['age']);
	$course = clean($_POST['course']);
	$country = clean($_POST['country']);
	$email = clean($_POST['email']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
	$ic_number = clean($_POST['ic_number']);
	$sex = clean($_POST['sex']);
	$day = clean($_POST['day']);
	$month = clean($_POST['month']);
	$year = clean($_POST['year']);
	$question = clean($_POST['question']);
	$answer = clean($_POST['answer']);
	$signup_date = date('d-m-Y',$today);
	$image_user = clean($_POST['image_user']);
	$timetable_image = clean($_POST['timetable_image']);
	$ip = clean($_SERVER['REMOTE_ADDR']);
	
	
	
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($nickname == '') {
		$errmsg_arr[] = 'nickname  missing';
		$errflag = true;
	}
	if($ic_number == '') {
		$errmsg_arr[] = 'ic_number missing';
		$errflag = true;
	}
	if($email	 == '') {
		$errmsg_arr[] = 'Email ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Re-password missing';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($username != '') {
		$qry = "SELECT * FROM student WHERE username='$username'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Email ID already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.html");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO student(username, nickname,age,course,country, email, password, ic_number,sex,date,question,answer,signup_date,image_user,ip) VALUES('$username','$nickname','$age','$course','$country','$email','".md5($_POST['password'])."','$ic_number','$sex','$date','$question','$answer','$signup_date','$image_user','$ip')";


	$qry2 = "INSERT INTO users (username,password,email,avatar,signup_date) VALUES('$username','".md5($_POST['password'])."','$email','$nickname','$signup_date')";
	
	mysql_query($qry2);
	
	$qry3=("INSERT INTO timetable_student (username,image) VALUES('$username','$timetable_image')");
		
		
		mysql_query($qry3);
	
	$result = @mysql_query($qry);
	//Check whether the query was successful or not
	if($result) {
		echo "<center>Successfully registration</center><br/>click <a href=../user/index.php>here</a>to Login";
		exit();
	}else {
		die("Query failed");
	}
?>
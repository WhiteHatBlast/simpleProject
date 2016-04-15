<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	
	<title>Student Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/jquery.mobile-1.3.1.css" />
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.1.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.3.1.min.js"></script>
	
	<style>
	
	label.faridblaster{
	
	background-color:pink;
	color:black;
	font-weight:bold;
	border-radius:10px 10px 10px 10px;
	width:500px
	height:30px;
	padding:5px;
	
	}
	
	
	</style>
</head>
<body>

<!-- message -->
<div data-role="page" id="alert" data-close-btn-text>
	<div data-role="header">
		<h1>Student Registration</h1>
	</div>
	
	<div data-role="content">
	<?php
	include("conf.php");
	if(isset($_POST['register_now']))
	{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$insert_new_data=mysql_query("INSERT INTO registration(user_username,user_password)  VALUES('$username','$password')");
	
	if($insert_new_data==TRUE)
	{
	
	echo "<center><label class='faridblaster'>Registration Success</label>
	
	<a href='index.php' data-role='button' >Back To Home</a></center>";
	}
	
	else
	
	{
	
	echo "registration failed";
	}
	
	
	}
	
	else
	  {
	
	
	
	?>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		
		<label>Username :</label><input type="text" name="username" value=""/><br/>
		<label>Password :</label><input type="password" name="password" value=""/><br/>
		<input type="submit" name="register_now" value="Register Now"/>
		
		</form>
		
		
<?php  } ?>
		
	</div>
	
	<div data-role="footer"  data-position="fixed" data-theme="a">
		<h4>www.mobiledevelopment.com</h4>
		</div>
	
	
</div>
</body>
</html>
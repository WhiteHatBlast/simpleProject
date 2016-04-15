<?php
session_start();
include('connectmysql.php'); 
if(isset($_POST['logmasuk']))
{
echo "haha";
$email=$_POST['email'];
$katalaluan=$_POST['katalaluan'];

$check_data_user="SELECT*FROM daftar where email='$email' AND katalaluan='$katalaluan'";
$result_data=mysql_query($check_data_user);

while($rows=mysql_fetch_array($result_data))
{

if($rows['katalaluan']==$_POST['katalaluan'])
{

$_SESSION['email']=$rows['email'];
$_SESSION['nama_pengguna']=$rows['nama_pengguna'];

header('Location:index.php');

}

else

{
echo "<script> alert('login  failed'); </script>";

}

}




}

?>

<?php  


if(!isset($_SESSION['nama_pengguna']) || (trim($_SESSION['nama_pengguna']) == ''))
{

echo "Log-Masuk ";


}

else

{

echo "Welcome !".$_SESSION['nama_pengguna'];

echo "<form action='index.php' method='POST'><input type='submit' name='keluar' value='keluar'></form>";

}

?> 

<?php
if(isset($_POST['keluar']))
{


session_destroy();

echo "you have logout successfully<img src='img/loading-gif.gif'>

<meta http-equiv='refresh' content='5;URL='http://192.168.1.2/'' /> ";

}

?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
		
					<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(images/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
		<body>

			<section class="main">
				<form class="form-3" id='login' action='<?php $_SERVER['PHP_SELF']; ?>' method='post' accept-charset='UTF-8'>
				    <p class="clearfix">
				        <label for="login">Email*:</label>
				        <input type="text" name="email" id="login" maxlength="50" placeholder="Email" required >
				    </p>
				    <p class="clearfix">
				        <label for="password">KataLaluan*:</label>
				        <input type="password" name="katalaluan" maxlength="50" placeholder="KataLaluan" required>
				    </p>
				   <center>
				    <p class="clearfix">
				        <input type="submit" name="logmasuk" value="Masuk">
				    </p>     </center>  
				</form>​
</body>
</html>

<?php 
session_start();
include("config.php");
if(isset($_SESSION['username']))
{

echo "<div id='error_message' style='color:red; font-weight:bold;'>You are logged in <br/>Click <a href='homepage.php'>here</a> to back admin area</div>";
echo '
<style>
#error_message{
margin-top:250px;
margin-left:450px;
position:absolute;
position:center;
font-size:20px;
}

</style>

';

}
else
{
if(isset($_POST['admin_login']))
{

if($_POST['admin_username']=="")
{

echo "<title>Admin Login</title><div id='error_message' style='color:red; font-weight:bold;'>Please Enter username<br/>";
echo "click <a href='index.php'><button type='button' class='btn btn-success'>Here</button></a> to try again</div>";


echo '<link href="css/menustyle.css" rel="stylesheet">
<style>
#error_message{
margin-top:250px;
margin-left:450px;
position:absolute;
position:center;
font-size:20px;
}

</style>

';

}
else if($_POST['admin_password']=="")
{


echo "<title>Admin Login</title><div id='error_message' style='color:red; font-weight:bold;'>Please Enter password</br>";
echo "click <a href='index.php'><button type='button' class='btn btn-success'>Here</button></a> to try again</div>";

echo '
<link href="css/menustyle.css" rel="stylesheet">
<style>
#error_message{
margin-top:250px;
margin-left:450px;
position:absolute;
position:center;
font-size:20px;

}

</style>

';


}
else
{
$username=$_POST['admin_username'];
$password=md5($_POST['admin_password']);

$check_database=mysql_query("SELECT*FROM admin_area");
$get_result=mysql_fetch_array($check_database);

if($get_result['admin_username']==$username)
{

echo "Username success<br/><br/>";
}

else
{

echo "Username is wrong , please try again<br/>";
echo "click <a href='index.php'><button type='button' class='btn btn-success'>Here</button></a> to try again";
exit();

}



if($get_result['admin_password']==$password)
{

echo "password success <br/><br/>";


}

else
{

echo "Sorry,Wrong password<br/>";
echo "click <a href='index.php'><button type='button' class='btn btn-success'>Here</button></a> to try again";
exit();
}

if($get_result['admin_username']==$username && $get_result['admin_password']==$password)
{
session_start();
$_SESSION['username'] =$get_result['admin_username'];
header('Location:homepage.php');
}

else
{
echo "login failed";

}


}
}

else
{



?>
<html><head><title>Admin Login</title>


<link href="css/menustyle.css" rel="stylesheet"></head>
<body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
<div id="login">

</div>
<table border="0" width="500"><tr><td  ><label style="color:white; font-weight:bold; font-size:30px;">Admin Login</label></td><td>&nbsp;</td></tr></table><br/>
<table border="0" width="500">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

<tr><td><label style="font-weight:bold; color:white;">Username  </label></td><td><input type="text" name="admin_username" value="" /></td></tr>
<tr><td><label style="font-weight:bold; color:white;">Password  </label></td><td><input type="password" name="admin_password" value=""/></td></tr>

<td><a href="index.php" class="btn">User</a></td><td><input type="submit" class="farid" name="admin_login" value=""/></td>
</table>


</form>





<?php } }?>


<style>
body{

background:#3c3c3c url("images/background.png") no-repeat center ;
background-postion:center;
background-position:fixed;


}

td{

width:10px;



}

input[type=submit].farid, input[type=button] {
border: none;
background: transparent url('images/login.png') no-repeat center center;
width: 200px;
height: 200px;
color: #fff;
font-size: 12px;
font-weight: 700;
text-align: center;
overflow: hidden;
padding-bottom: 6px;
float: right;
margin-right: -2px;
cursor: pointer;
margin-top:-140px;
margin-left:150px;
}






</style>





</body>
</html>


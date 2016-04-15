<?php
include("conf.php");
if(isset($_POST['user_login']))
{

$user_username=$_POST['user_username'];
$user_password=md5($_POST['user_password']);

$check_database=mysql_query("SELECT*FROM login_area WHERE user_username='$user_username' AND user_password='$user_password'");


if($check_database==true)
{

while($show_rows=mysql_fetch_array($check_database))
{

$get_username=$show_rows['user_username'];


session_start();


$_SESSION['user_session']=$get_username;


header('Location:homepage.php');





}




}

else

{
echo "username or password failed";

}


}


else


{





?>


<html>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

<label><b>Username :</b></label><input type="text" name="user_username" value=""/><br/>
<label><b>Password :</b></label><input type="password" name="user_password" value=""/><br/>
<input type="submit" name="user_login" value="Login now"/>


</form>

<?php } ?>
</html>
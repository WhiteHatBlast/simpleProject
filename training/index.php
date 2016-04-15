<?php
include("conf.php");


if(isset($_POST['Send_value']))
{
$user_username=$_POST['user_username']; // get value from user kein 
$user_password=md5($_POST['user_password']); // get value from password kein 


$create_new_acc=mysql_query("INSERT INTO  login_area (user_username,user_password) VALUES('$user_username','$user_password') ");

if($create_new_acc==TRUE)
{


echo "<script> alert('success insert to database'); </script>";


}

else

{

echo "insert to database failed";

}



}


else



{




?>



<html>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

Username :<input type="text" name="user_username"/><br/>
Password :<input type="password" name="user_password"/><br/>
<input type="submit" name="Send_value"/>

</form>


</html>

<?php } ?>
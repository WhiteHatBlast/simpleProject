<?php //the header// mesti ada pembuka 
$host="localhost";
$username_database="root";
$password_database="";
$database_name="sukahati";

$get_the_connection=mysql_connect($host,$username_database,$password_database);
$check=mysql_select_db($database_name,$get_the_connection);

if($check==TRUE)
{

echo "connected";
}
else
{

echo "failed";

}


if(isset($_POST['register'])) //get value from variables name in submittion
{


if($_POST['user_username']=="") // jika username kosong dye akan pop up //
{

echo "<script> alert('Sorry, please fill the username'); </script>";

}


else if($_POST['user_password']=="") // jika password kosong dye akan pop up //
{

echo "<script> alert('Sorry, please fill the password'); </script>";

}

else
{

$username=$_POST['user_username'];
$password=$_POST['user_password'];

//oke nie akan masuk terus ke dalam database//

$insert_to_database=mysql_query("INSERT INTO register(user_username,user_password) VALUES('$username','$password')");

if($insert_to_database==TRUE)
{

echo "database insterted";


}

else
{

echo "database failed";

}
}

}
//close header// dan penutup
?> 
<html>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table border="1" width="500">

<tr><td><label>Username :</label></td><td><input type="text" name="user_username" value=""/></td></tr>
<tr><td><label>Password :</label></td><td><input type="password" name="user_password" value=""/></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="register" value="REGISTER"/></td></tr>

</table>
</form>

</html>
<?php
$host="localhost";
$username="root";
$password="";
$database="farid";

$connect_database=mysql_connect($host,$username,$password);
mysql_select_db($database);

if($connect_database==TRUE)
{

echo "connected<br/>";
}

else
{

echo "not connected<br/>";

}

if(isset($_POST['register']))
{

if($_POST['user_username']=="")
{

echo "Sorry, your username not fill";

}

else if($_POST['user_password']=="")
{

echo "Sorry, your password not fill";

}

else
{

$user_username=md5(sha1($_POST['user_username']));
$user_password=md5($_POST['user_password']);


$database_inserted=mysql_query("INSERT INTO student(user_username,user_password) VALUES('$user_username','$user_password')");
if($database_inserted==TRUE)
{

echo "Insert new student successfully";

}

else
{
echo "unsuccessfully registration";

}


}

}

?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table border="1" width="500"> 

<tr><td>Username :</td><td><input type="text" name="user_username" value=""/></td></tr>
<tr><td>Password  :</td><td><input type="password" name="user_password" value=""/></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="register" value="register now" />
<input type="reset" name="Clear" value="Clear" /></td></tr>

</table>
</form>
<?php
if(isset($_POST['get_user_response']))
{

function exam()
{

for($get_data=1;$get_data<10;$get_data++)
{

echo "good luck<br/>";

}

}
exam();
function dayah()
{

for($get_data1=1;$get_data1<10;$get_data1++)
{

echo "dayah<br/>";

}
}


dayah();


}



?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="submit" name="get_user_response" value="goodluck"/>
</form>
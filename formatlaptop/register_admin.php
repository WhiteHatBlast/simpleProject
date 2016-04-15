<?php
include("config.php");

if(isset($_POST['Register']))
{

$admin_username=$_POST['admin_username'];
$admin_password=md5($_POST['admin_password']);

$insert_to_database=mysql_query("INSERT INTO admin_area(admin_username,admin_password) VALUES('$admin_username','$admin_password')");

if($insert_to_database==TRUE)

{


echo "<script> alert('Add New Admin Successfully'); </script>";
echo "<meta http-equiv='REFRESH' content='0;url=homepage.php'>";

}


else
{

echo "failed insert to database";

}




}


?>

<table border="0" width="700">
<form action="<?php $_SERVER['PHP_SELF']; ?>"  method="POST"/>

<tr><td><label>Username :</label></td><td><input type="text" name="admin_username" value="" placeholder="Enter Username" required autofocus/></td></tr>
<tr><td><label>Password :</label></td><td><input type="password" name="admin_password" value="" placeholder="Enter Password" required autofocus/></td></tr>
<tr><td><label>&nbsp;</label></td><td><input type="submit" class="btn" name="Register" value="Add Admin"/></td></tr>

</form>

</table>
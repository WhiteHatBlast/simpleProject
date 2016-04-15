<?php
session_start();
$host="localhost";
$username="root";
$password="";
$databasename="status_currently";

$connect_to_database=mysql_pconnect($host,$username,$password);
$check_database=mysql_select_db($databasename,$connect_to_database);

if($check_database==TRUE)
{

echo 

'

<form action="'.$_SERVER['PHP_SELF'].'" method="POST">
USERNAME :<input type="text" name="admin_username" value=""/><br/>
PASSWORD :<input type="password" name="admin_passwor" value=""/><br/>
<input type="submit" name="admin_login" value="Login now"/>


</form>
';

}

else
{


echo "database is unconnected";

}

if(isset($_POST['admin_login']))
{

$admin_username=$_POST['admin_username'];
$admin_password=$_POST['admin_password'];

$check_database_first_true_or_not=mysql_query("SELECT admin_username,admin_password FROM administrator WHERE admin_username='".$admin_username."' AND admin_password='".$admin_password."'");

if($check_database_first_true_or_not==TRUE)
{

while($show_result=mysql_fetch_array($check_database_first_true_or_not))
{

$_SESSION['admin_session_start']=$show_result['admin_status'];


}

}

else
{



}



}



}






?>

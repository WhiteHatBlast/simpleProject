<?php
$host="localhost";
$username="root";
$password="";
$database_name="trainingagain";

$check_database=mysql_pconnect($host,$username,$password) or die("Cannot connect to database");
$check_result=mysql_select_db($database_name,$check_database);

if($check_result==TRUE)
{

echo "database connected";

}
else
{
echo "database not connected";

}

?>
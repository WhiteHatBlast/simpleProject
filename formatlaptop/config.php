<?php
$host="localhost";
$username="root";
$password="";
$databasename="formatlaptop";

$check_database=mysql_connect($host,$username,$password) or die("Failled Connect / username is wrong");
$show_result=mysql_select_db($databasename,$check_database);

if($show_result)
{



}
else
{

echo "connect to daatabse failed";

}

?>
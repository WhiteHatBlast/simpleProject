<?php
$host="localhost";
$username="root";
$password="";
$database="poll";

$get_database_connection=mysql_connect($host,$username,$password,$database) or die("Sorry,database is not connected");

$select_database=mysql_select_db($database,$get_database_connection);


if($select_database==TRUE)
{



}

else

{

echo "<script> alert('database is not connected'); </script>";

}

?>
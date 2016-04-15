<?php
$host="localhost";
$username_db="root";
$password_db="";
$database_name="training";



$check=mysql_pconnect($host,$username_db,$password_db) or die("Cannot connect to database");
$check_db=mysql_select_db($database_name,$check);



if($check_db==TRUE)
{

echo "connected";

}

else

{

echo "failed connect to database";
}


?>
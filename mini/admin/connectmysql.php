<?php
$host="localhost";
$username="root";
$pass="";
$dbconn=mysql_pconnect($host,$username,$pass)or die("sorry, your cannot connect to database");
mysql_select_db("finalproject",$dbconn);
?>
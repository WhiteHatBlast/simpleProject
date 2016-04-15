<?php
$host="localhost";
$username="itmind4u";
$pass="aabbcc123456";
$dbconn=mysql_pconnect($host,$username,$pass)or die("sorry, your cannot connect to database");
mysql_select_db("itmind4u_project",$dbconn);
?>
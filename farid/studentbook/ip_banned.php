<?php
include("connectmysql.php");
$ip =$_SERVER['REMOTE_ADDR'];


$check_ip="SELECT*FROM ip_banned where ip='".$ip."'";
$result = mysql_query($check_ip);
$num_rows = mysql_num_rows($result);

if ($num_rows > 0)

{

header('Location:result.php');
}



?>
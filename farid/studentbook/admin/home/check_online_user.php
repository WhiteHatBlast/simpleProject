<?php

// include the php script
include("include/geoip.inc");

// open the geoip database
$gi = geoip_open("include/GeoIP.dat",GEOIP_STANDARD);


// to get country code
$country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);



// to get country name
$country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);


// close the database
geoip_close($gi);



$session=session_id();
$time=time();
$ip=$_SERVER['REMOTE_ADDR'];
$time_check=$time-600; //SET TIME 10 Minute

$host="localhost"; // Host name
$username="itmind4u"; // Mysql username
$password="123456"; // Mysql password
$db_name="itmind4u_project"; // Database name
$tbl_name="user_online"; // Table name

// Connect to server and select databse
mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name WHERE ip='$ip'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
if($count>0)
{

$sql2="UPDATE $tbl_name SET time='$time',ip='$ip',session='$session'  WHERE ip = '$ip'";
$result2=mysql_query($sql2);


}

else
{

$sql1="INSERT INTO $tbl_name(session, time,ip,country)VALUES('$session', '$time','$ip','$country_code')";
$result1=mysql_query($sql1);

}

$sql3="SELECT * FROM $tbl_name";
$result3=mysql_query($sql3);
$count_user_online=mysql_num_rows($result3);


echo "<div align=left><table bgcolor=yellow border=0><a><td><b>";

echo "Country : ".$country_name."(".$country_code.")&nbsp;";


echo "User online : $count_user_online </b></td></a></table></div>";

// if over 10 minute, delete session 
$sql4="DELETE FROM $tbl_name WHERE time<$time_check";
$result4=mysql_query($sql4);

// Open multiple browser page for result


// Close connection
mysql_close();
?>
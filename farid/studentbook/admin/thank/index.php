<html>
<body><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><META NAME="KeyWords" CONTENT="StudentBook - Disscusion,sharing,knowledge"><META NAME="author" CONTENT="faridblaster developer">

<?php
require_once('authuser.php');
include("connectmysql.php");

?>
<h1>Login Successfully!</a>


<div align="center">

<?php 



require_once('authuser.php');

$s_username = $_SESSION['username'];
include("connectmysql.php");
$kuiri=("SELECT username from student where username='".$s_username."'");
$result=mysql_query($kuiri,$dbconn);

$row = mysql_fetch_array($result);

	echo "<meta http-equiv=REFRESH content=5;url=../home>Welcome ! " .$row['username']." <a>,</a><br><img src=\"images/smile.gif\">";


?>


	</div>
<center><img src="images/ajax_loader.gif" width="70" height="70"> </a></br>Please Wait.. you will redirect....
</center>
<style type="text/css">
body{

background-image:url("background/background.jpg");
background-repeat:repeat;

}

</style>
</body>
</html>
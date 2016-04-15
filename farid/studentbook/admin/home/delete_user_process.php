<?php
include("config.php");
require_once("authadmin.php");

If (isset($_POST['username']))
	{
	

$query = "delete from student where username='".$_POST['username']."'" ;
$query1 = "delete from users where username='".$_POST['username']."'" ;


mysql_query ($query1) ;


//Sending query to MySQL
$result = mysql_query ($query) ;
//Message display
if ($result == TRUE) echo "<br><br><br><center>Data Deleted Successfully<br/><a href=check_user.php>Admin</a></center>" ;
if ($result == FALSE) echo "<br><br><br><center>Failed To Delete Data</center>" ;
//Disconnect MySQL
	}
Else
	{
	header('Location:index.php');
	}


?>



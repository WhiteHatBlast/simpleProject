<?php
require_once('../user/home/authuser.php');
include("../user/home/connectmysql.php");
include("connectmysql.php");


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	 <title>E-Studentbook</title>
	<META NAME="KeyWords" CONTENT="StudentBook - Disscusion,sharing,knowledge">
	<META NAME="author" CONTENT="faridblaster developer">
	  
   
 
   <link href="../user/home/css/menu.css" rel="stylesheet" type="text/css" media="screen" />
   
   
<?php include("style_index.php"); ?>
</head>
<body>
<div id="wrap">
	<div id="header"><br/><br/><br/></div>
	<div id="nav">
		<ul>
		<li>
			<?php include("menu.php"); ?>
	
		</ul>
	</div>
	<div id="main">

		
<?php


$sql="SELECT * FROM forum_question ORDER BY id ASC";
// OREDER BY id ASC is order result by descending

$result=mysql_query($sql);
?>

<div align="center"><table style=' margin-top:60px;'width="78%" border="0"  cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="2%" align="center" bgcolor="#04B431"><strong>#</strong></td>
<td width="10%" align="center" bgcolor="#04B431"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#04B431"><strong>Views</strong></td>
<td width="5%" align="center" bgcolor="#04B431"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#04B431"><strong>Date/Time</strong></td>
</tr>

<?php
 
// Start looping table row
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#c2f6b5"><?php

$email=$rows['email'];
$status_admin="admin";
$check_first=mysql_query("SELECT*FROM users WHERE email='".$email."'");
while($row=mysql_fetch_array($check_first))
{


 echo "<img src=../../../user/home/image/".$row['image_user']." width=50 height=50></img>"; 

 

 
 }

 if($status_admin==$rows['status'])

{
 echo "<img title='admin' src=../admin/home/forum/images/administrator.png width=50 height=50></img>"; 
 }
 ?></td>
<td bgcolor="#c2f6b5"><a  href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td style="color:black;" align="center" bgcolor="#c2f6b5"><?php echo $rows['view']; ?></td>
<td style="color:black;" align="center" bgcolor="#c2f6b5"><?php echo $rows['reply']; ?></td>
<td style="color:black;" align="center" bgcolor="#c2f6b5"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysql_close();
?>

<tr>
<td colspan="5" align="right" bgcolor="#04B431"><a class="button_studentbook_style" href="create_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table></div>
	
	<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	
	
	</div>

	<div id="footer">
		<p><center>Develope By Administrator E-Studentbook</center></p>
	</div>
</div>

<style>
td{

color:white;
font-weight:bold;

}

</style>
</body>
</html>
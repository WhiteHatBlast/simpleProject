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
$nickname=$_SESSION['nickname'];

$get_database=mysql_query("SELECT*FROM users WHERE avatar='".$nickname."'");
$rows=mysql_fetch_array($get_database);

?>


<div align="center"><table style='margin-top:60px;' width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#6ecf81">
<tr>
<form id="form1" name="form1" method="post" action="add_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#acf39b">
<tr>
<td colspan="3" bgcolor="#6cd853"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" placeholder="write Topic" required autofocus/></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail" placeholder="detail" required autofocus></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="hidden" id="name" value="<?php echo $_SESSION['user_username']; ?>" size="50" /><?php echo $_SESSION['user_username']; ?></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="hidden" id="email" value="<?php echo $rows['email']; ?>" size="50" /><?php echo $rows['email']; ?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input class="button_studentbook_style" type="submit" name="Submit" value="Submit" /> <input class="button_studentbook_style" type="reset" name="Submit2" value="Reset" />
<a href="index.php"><input class="button_studentbook_style" type="button" name="back" value="Back" /></a></td>
</tr>
</table>
</td>
</form>
</tr>
</table></div>
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
</body>
</html>
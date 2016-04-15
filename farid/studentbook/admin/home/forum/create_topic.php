<?php
require_once("authadmin.php");
include("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	 <title>E-Studentbook</title>
	<META NAME="KeyWords" CONTENT="StudentBook - Disscusion,sharing,knowledge">
	<META NAME="author" CONTENT="faridblaster developer">
	  
  
<link href="../../../user/home/css/menu.css" rel="stylesheet" type="text/css" media="screen" />

	<?php require_once("style_menu.php"); ?>
</head>
<body>
<div id="wrap">
	<div id="header"><br/><br/><br/></div>
	<div id="nav">
		<div  id="menu">
    <ul class="menu">
        <li><a href="../index.php"><span>HOME</span></a></li>
        <li><a href="#" class="parent"><span>Admin ( Access )</span></a>
            <div>
                <ul>
                    <li><a href="../profile.php"><span>Profile/edit</span></a></li>
					<li><a href="../change_password.php"><span>Change Password</span></a></li>
					<li><a href="../update_homepage.php"><span>Update Homepage</span></a></li>
					<li><a href="../logout.php"><span>Logout</span></a></li>
				
					               </ul>
            </div>
        </li>
        
        <li><a href="#" class="parent"><span>Admin Controller</span></a>
            <div>
                <ul>
                    <li><a href="../file_management.php"><span>File Management</span></a></li>   
					<li><a href="../user_control.php"><span>User Management</span></a></li>  
					<li><a href="../course.php"><span>Student Statistic</span></a></li>   
						</ul>
            </div>
        </li>
		
	
	
		
    <li><a href="../feedback_info.php"><span>Feed Back ( info )</span></a></li>
	
	<li><a href="index.php"><span>Forum</span></a></li>

         
		<li><a href="../manage_topic.php"><span>Manage Forum</span></a></li>
		
		 
    </ul>
</div>
	</div>
	<div id="main">
		

<?php
	require_once('authadmin.php');
	include('config.php');
	include('stylemenu.php');
?>	
<div align="center"><table style='margin-top:60px;' width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="996633">
<tr>
<form id="form1" name="form1" method="post" action="add_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#82FA58">
<tr>
<td colspan="3" bgcolor="#00FF00"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="hidden" id="name" value="<?php echo "Admin ".$_SESSION['admin_username']; ?>" size="50" /><?php echo "Admin ".$_SESSION['admin_username']; ?></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="hidden" id="email" value="<?php echo $_SESSION['admin_email']; ?>" size="50" /><?php echo $_SESSION['admin_email']; ?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" />
<a href="index.php"><input type="button" name="back" value="Back" /></a></td>
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
	<p>&nbsp;</p>

	
	
	
	
	</div>
	
	
	<div id="footer">
		<p><center>Develope By Administrator E-Studentbook</center></p>
	</div>
</div>
</body>
</html>
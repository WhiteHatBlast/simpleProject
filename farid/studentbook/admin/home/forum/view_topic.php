<?php
require_once("authadmin.php");
include("config.php");
?>
<?php

function Clear($id)
{
    $id = str_replace("'", "", $id);
	 $id = str_replace("-", "", $id);
    $id = str_replace('"', '', $id);
    $id = strip_tags($id);
    $id = htmlentities($id);
    return $id;
}

// get value of id that sent from address bar 
$id=Clear($_GET['id']);
$sql="SELECT * FROM forum_question WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
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
<div align="center"><table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#acf39b">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#acf39b">
<tr>
<td bgcolor="#d2fbcb"><strong><label>Topic :</label></strong><?php

$id=$_GET['id'];
$sql="SELECT * FROM forum_question WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

 echo $rows['topic']; ?></td>
</tr>

<tr>
<td bgcolor="#d2fbcb"><strong><label>Description :</label></strong><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#d2fbcb"><strong>By :</strong> <?php echo $rows['name']; ?> <br/><strong>Email : </strong><?php echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#d2fbcb"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td><tr><td>


<br/>
<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysql_query($sql2);

while($rows=mysql_fetch_array($result2)){


$text = htmlspecialchars($rows['a_answer']);
if($rows['status']=='active')
{







 echo "<table  border='0' cellpadding='3' cellspacing='1' bgcolor='#acf39b'>
<tr>
<td>

 
 
 
  "; 



 
?>
 

<label style="color:brown">From -></label><?php echo $rows['a_name']."<span style='color:brown'>&nbsp;said:</span>"; ?>

<?php echo wordwrap($text,70,"<br />\n",TRUE); ?>
</td></tr>
 




</div>

 
<?php
}

else if($rows['status']=='block')
{
echo "<center><font color=red>this comment was removed by admin</font></center><br/>";

}


}

?>
<tr><td><a href="" onclick="window.open('reply_forum.php?id=<?php echo $id; ?>','popup','width=500,height=450,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=200,top=100'); return false"><input class="button_studentbook_style" type="button" value="Comment"></a><input class="button_studentbook_style" type="button" value="Reload page" onclick="reloadPage();"><a  href="index.php"><input class="button_studentbook_style" type="button" value="Back"></a></td></tr>
</td></tr>
</table>
</tr>

</table>
 
<?php


$sql3="SELECT view FROM forum_question WHERE id='$id'";
$result3=mysql_query($sql3);
$rows=mysql_fetch_array($result3);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO forum_question(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update forum_question set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);
mysql_close();
?>
<script>
function reloadPage()
{
location.reload()
}

</script>






</div>
	
	
	<div id="footer">
		<p><center>Develope By Administrator E-Studentbook</center></p>
	</div>
</div>
</body>
</html>
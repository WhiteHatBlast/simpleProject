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

		

<div align="center"><table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#acf39b">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#acf39b">
<tr>
<td bgcolor="#d2fbcb"><strong><label>Topic :</label></strong><?php
if(isset($_REQUEST['id']))
{
function Clear($id)
{
    $id = str_replace("'", "", $id);
	 $id = str_replace("-", "", $id);
    $id = str_replace('"', '', $id);
    $id = strip_tags($id);
    $id = htmlentities($id);
    return $id;
}

$id = Clear($_GET['id']);
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
?>





<?php 
$email=$rows['a_email'];
$check_first=mysql_query("SELECT*FROM users WHERE email='".$email."'");
while($row=mysql_fetch_array($check_first))
{


 echo "<table  border='0' cellpadding='3' cellspacing='1' bgcolor='#acf39b'>
<tr>
<td>
<span style='float:left'><img src=../user/home/image/".$row['image_user']." width=30 height=30></img></span>
 
 
 
  "; 



 
?>
 

<label style="color:brown">From -></label><?php echo $rows['a_name']."<span style='color:brown'>&nbsp;said:</span>"; ?>

<?php echo wordwrap($text,70,"<br />\n",TRUE); ?>
</td></tr>
 <?php

 } ?>




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
}
else
{
echo "eh ";

}
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
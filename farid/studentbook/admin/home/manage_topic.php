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
	  
  
<link href="../../user/home/css/menu.css" rel="stylesheet" type="text/css" media="screen" />

	<?php include("style_index.php"); ?>
	<style>
	
	td{
	
	font-size:15px;
	}

th{font-size:13px;
}
	</style>
</head>
<body>
<div id="wrap">
	<div id="header"><br/><br/><br/></div>
	<div id="nav">
		<div  id="menu">
    <ul class="menu">
        <li><a href="index.php"><span>HOME</span></a></li>
        <li><a href="#" class="parent"><span>Admin ( Access )</span></a>
            <div>
                <ul>
                    <li><a href="profile.php"><span>Profile/edit</span></a></li>
					<li><a href="change_password.php"><span>Change Password</span></a></li>
					<li><a href="update_homepage.php"><span>Update Homepage</span></a></li>

<li><a href="add_staff.php"><span>
					<?php
					$admin=$_SESSION['control'];
$full_control="full control";

if($admin==$full_control)
{
?>
Add/Delete Admin

<?php } else { ?>
Admin List

<?php } ?></span></a></li>
					<li><a href="logout.php"><span>Logout</span></a></li>
				
					               </ul>
            </div>
        </li>
        
        <li><a href="#" class="parent"><span>Admin Controller</span></a>
            <div>
                <ul>
                    <li><a href="file_management.php"><span>File Management</span></a></li>   
					<li><a href="user_control.php"><span>User Management</span></a></li>  
					<li><a href="course.php"><span>Student Statistic</span></a></li>   
						</ul>
            </div>
        </li>
		
	
	
		
    <li><a href="feedback_info.php"><span>Feed Back ( info )</span></a></li>
	
	<li><a href="forum"><span>Forum</span></a></li>

         
		<li><a href="manage_topic.php"><span>Manage Forum</span></a></li>
		
		 
    </ul>
</div>
	</div>
	<div id="main">
		

<html>
<body><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><META NAME="KeyWords" CONTENT="StudentBook - Disscusion,sharing,knowledge"><META NAME="author" CONTENT="faridblaster developer">
<head><title>FORUM MANAGEMENT</title></head>
<h1><center>FORUM MANAGEMENT</center></h1>
<style>
th{font-size:15px;
text:bold;}
</style>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<div align="center">
<table bgcolor="#5FF748 "  width="600" border="0" >
<td><font color="black"><b><center>FORUM TOPIC</center></b></font></td>
</table>
<table bgcolor="#D8F6CE" width="600" border="0">
<th>No.
<th>Name
<th>Email
<th>Topic
<th>Detail
<th>Control
<?php
//forum topic//
$get_data_forum="SELECT*FROM forum_question";
$show_result_forum=mysql_query($get_data_forum);


while($rows=mysql_fetch_assoc($show_result_forum))
{
$topic = htmlspecialchars($rows['topic']);
$email = htmlspecialchars($rows['email']);
$text_detail = htmlspecialchars($rows['detail']);
$id=$rows['id'];
$name=$rows['name'];

echo "<tr><td>".$rows['id']."</td>
<td>".$rows['name']."</td>
<td>".wordwrap($email,10,"<br />\n",TRUE)."</td>
<td>".wordwrap($topic,20,"<br />\n",TRUE)."</td>
<td>".wordwrap($text_detail,20,"<br />\n",TRUE)."</td>

<td>";
?>

<a onclick="return confirm('Are you sure you want to proceed?')"  class="button_studentbook_style" href='manage_topic.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&topic=<?php echo $topic; ?>'><b>X</b></a>
</td>

<?php

echo "</tr>";


}
?>
</th>
</th>
</th>
</th>
</th>
</th>
</table></div>
</form>



<div align="center">
<table bgcolor="#5FF748 "  width="600" border="0" >
<td><font color="black"><b><center>FORUM ANSWER (USER)</center></b></font></td>
</table>
<table bgcolor="#D8F6CE" width="600" border="0">
<th>No.
<th>Name
<th>Email
<th>Answer
<th>Status
<th>Control
<th>Block/Active
<?php
//forum answer
$get_data_forum="SELECT*FROM forum_answer";
$show_result_forum=mysql_query($get_data_forum);


while($rows=mysql_fetch_assoc($show_result_forum))
{
$a_answer = htmlspecialchars($rows['a_answer']);
$a_email = htmlspecialchars($rows['a_email']);
$question_id=$rows['question_id'];
$a_name=$rows['a_name'];

echo "<tr><td>".$rows['question_id']."</td>
<td>".$rows['a_name']."</td>
<td>".wordwrap($a_email,10,"<br />\n",TRUE)."</td>
<td>".wordwrap($a_answer,20,"<br />\n",TRUE)."</td>
<td>".$rows['status']."</td>

<td align='center'>";

?>
<a onclick="return confirm('Are you sure you want to proceed?')"  class="button_studentbook_style" href='manage_topic.php?question_id=<?php echo $question_id; ?>&a_name=<?php  echo $a_name; ?>&a_answer=<?php echo $a_answer; ?>'>
<b>X</b></a>
</td>

<?php

echo "<td>
<form action=$_SERVER[PHP_SELF] method='POST'><select name='status1'><option value='active'>active</option><option value='block'>block</option></select>
<input type='hidden' name=question_id1 value='$question_id'>
<input type='hidden' name=a_email1 value='$a_email'>
<input type='hidden' name=a_answer1 value='$a_answer'>
<input type='hidden' name=a_name1 value='$a_name'>";
?>

<input type='submit' name='submit1' onclick="return confirm('Are you sure you want to proceed?')"  class="button_studentbook_style" value='block/active'>

<?php
echo "</form>
</td>

</tr>";


}
?>
</th>
</th>
</th>
</th>
</th>
</th>
</th>
</table></div>


<?php
//block/active// auchor faridblaster
if(isset($_POST['submit1']))
{
$question_id1=$_POST['question_id1'];
$a_email1=$_POST['a_email1'];
$a_answer1=$_POST['a_answer1'];
$status1=$_POST['status1'];

$result=mysql_query("UPDATE forum_answer SET status='$status1' WHERE question_id='$question_id1' AND a_email='$a_email1' AND a_answer='$a_answer1'");

if($result)
{

echo "<center><h3><font color=red>update success</font><h3><br/>
<a href='manage_topic.php'>Refresh</a>
</center>";
}


}


?>

<?php
if(isset($_REQUEST['question_id']) && ($_REQUEST['a_name'])) {

$question_id=$_REQUEST['question_id'];
$a_name=$_REQUEST['a_name'];
$a_answer=$_REQUEST['a_answer'];


$go_delete_topic="DELETE FROM forum_answer where question_id=".$question_id." AND a_name='".$a_name."' AND a_answer='".$a_answer."'";
$push_in=mysql_query($go_delete_topic);

if($push_in)
{
$admin=$_SESSION['admin_username'];
echo "<center>Admin $admin ! you have delete this answer:<font color=red>".$a_answer."</font> from <font color=red>".$name."</font><br/><a href='manage_topic.php'>Refresh</a></center>";

}

else


{

echo "<center><font color=red>Sorry,nothing here</font></center>";

}

}

else if(isset($_REQUEST['id']) && ($_REQUEST['name'])) {

$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$topic=$_REQUEST['topic'];


$go_delete_topic="DELETE FROM forum_question where id=".$id." AND name='".$name."' AND topic='".$topic."'";
$push_in=mysql_query($go_delete_topic);

if($push_in)
{
mysql_query("DELETE FROM forum_answer where question_id=".$id."");

$admin=$_SESSION['admin_username'];
echo "<center>Admin $admin ! you have delete this answer:<font color=red>".$topic."</font> from <font color=red>".$name."</font><br/><a href='manage_topic.php'>Refresh</a></center>";

}

else


{

echo "<center><font color=red>Sorry,nothing here</font></center>";

}

}


else

{

$admin=$_SESSION['admin_username'];
echo "<center>Hey admin &nbsp;<font color=red>$admin!</font>,Lets do something here. :)</center>";

}



?>
<style>
a{text-decoration:none;}
th{background-color:#8EF77E;}
</style>
</body>
</html>


	
	
	</div>
	<div id="sidebar">
		
		<!--  start gender statistics !-->
	
		<table bgcolor="#5FF748" width="290" border="0">
					<td><center><b style="color:black;">Gender Statistic</b></center></td>
					</table>
					<table bgcolor="#D8F6CE" width="290" border="0">
					<th bgcolor="#8EF77E" style="color:black;">Male
					<th bgcolor="#8EF77E" style="color:black;">Female
					<?php
					$result = mysql_query("SELECT COUNT(sex) FROM student where sex='male'");
					$count = mysql_result($result, 0);//male//
					
					$result1 = mysql_query("SELECT COUNT(sex) FROM student where sex='female'");
					$count1 = mysql_result($result1, 0);//female//
					
					
					
					echo "<tr><td ><center>&nbsp;&nbsp;&nbsp;$count</center></td><td><center>$count1</center></td></tr>";
					
					
					?>
					</th>
					</th>
					</table>
					
					<!-- end gender statistics !-->


<table bgcolor="#5FF748" width="290" border="0">
					<td><center><b style="color:black;">User Statistic</b></center></td>
					</table>
					<table bgcolor="#D8F6CE" width="290" border="0">
					<th bgcolor="#8EF77E" style="color:black;"> Course
					<th bgcolor="#8EF77E" style="color:black;">Total Member
					<?php
					$result = mysql_query("SELECT COUNT(course) FROM student where course='JTMK'");
					$count = mysql_result($result, 0);//JTMK//
					
					$result1 = mysql_query("SELECT COUNT(course) FROM student where course='JKE'");
					$count1 = mysql_result($result1, 0);//JKE//
					
					$result2 = mysql_query("SELECT COUNT(course) FROM student where course='JKM'");
					$count2 = mysql_result($result2, 0);//JKM//
					
					$result3 = mysql_query("SELECT COUNT(course) FROM student where course='JP'");
					$count3 = mysql_result($result3, 0);//JP//
					
					$result4 = mysql_query("SELECT COUNT(course) FROM student where course='OTHER'");
					$count4 = mysql_result($result4, 0);//JP/
					
					echo "<tr><td >&nbsp;&nbsp;&nbsp;JTMK</td><td><center>$count</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;JKE</td><td><center>$count1</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;JKM</td><td><center>$count2</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;JP</td><td><center>$count3</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;OTHER</td><td><center>$count4</center></td></tr>";
					?>
					</th>
					</th>
					</table>
					
					<!-- END USER STATISTIC -->
					
					<!-- UPLOAD FILE BY USER STATISTIC -->
					<table bgcolor="#5FF748" width="290" border="0">
					<td><center><b style="color:black;">Upload File</b></center></td>
					</table>
					<table bgcolor="#D8F6CE" width="290" border="0">
					<th bgcolor="#8EF77E" style="color:black;"> Course
					<th bgcolor="#8EF77E" style="color:black;">Total File
					<?php
					$result = mysql_query("SELECT COUNT(course) FROM upload where course='JTMK'");
					$count = mysql_result($result, 0);//JTMK//
					
					$result1 = mysql_query("SELECT COUNT(course) FROM upload where course='JKE'");
					$count1 = mysql_result($result1, 0);//JKE//
					
					$result2 = mysql_query("SELECT COUNT(course) FROM upload where course='JKM'");
					$count2 = mysql_result($result2, 0);//JKM//
					
					$result3 = mysql_query("SELECT COUNT(course) FROM upload where course='JP'");
					$count3 = mysql_result($result3, 0);//JP//
					
					$result4 = mysql_query("SELECT COUNT(course) FROM upload where course='OTHER'");
					$count4 = mysql_result($result4, 0);//OTHER//
					
					echo "<tr><td >&nbsp;&nbsp;&nbsp;JTMK</td><td><center>$count</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;JKE</td><td><center>$count1</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;JKM</td><td><center>$count2</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;JP</td><td><center>$count3</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;OTHER</td><td><center>$count4</center></td></tr>";
					?>
					</th>
					</th>
					</table>
					
					<!-- File Category BY USER STATISTIC -->
					<table bgcolor="#5FF748" width="290" border="0">
					<td><center><b style="color:black;">Category Files Statistic</b></center></td>
					</table>
					<table bgcolor="#D8F6CE" width="290" border="0">
					<th bgcolor="#8EF77E" style="color:black;"> Category
					<th bgcolor="#8EF77E" style="color:black;">JTMK
					<th bgcolor="#8EF77E" style="color:black;">JKE
					<th bgcolor="#8EF77E" style="color:black;">JKM
					<th bgcolor="#8EF77E" style="color:black;">JP
					<th bgcolor="#8EF77E" style="color:black;">OTHER
					<?php
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='software' AND course='JTMK'");
					$count = mysql_result($result, 0);
					
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='software' AND course='JKE'");
					$count1 = mysql_result($result, 0);
					
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='software' AND course='JKM'");
					$count2 = mysql_result($result, 0);
					
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='software' AND course='JP'");
					$count3 = mysql_result($result, 0);

$result = mysql_query("SELECT COUNT(category) FROM info_software where category='software' AND course='OTHER'");
					$count9 = mysql_result($result, 0);
					
					
					
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='new_information' AND course='JTMK'");
					$count4 = mysql_result($result, 0);
					
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='new_information' AND course='JKE'");
					$count5 = mysql_result($result, 0);
					
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='new_information' AND course='JKM'");
					$count6 = mysql_result($result, 0);
					
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='new_information' AND 
					course='JP'");
					$count7 = mysql_result($result, 0);
					
					$result = mysql_query("SELECT COUNT(category) FROM info_software where category='new_information' AND 
					course='OTHER'");
					$count8 = mysql_result($result, 0);
					
					
					
					echo "<tr><td >&nbsp;&nbsp;&nbsp;Software</td><td><center>$count</center></td><td><center>$count1</center></td><td><center>$count2</center></td><td><center>$count3</center></td><td><center>$count9</center></td></tr>";
					echo "<tr><td >&nbsp;&nbsp;&nbsp;Information</td><td><center>$count4</center></td><td><center>$count5</center></td><td><center>$count6</center></td><td><center>$count7</center></td><td><center>$count8</center></td></tr>";
					
					?>
					</th>
					</th>
					</th>
					</th>
					</th>
					</th>
					
					</table>
					
					<style>
.scale { float: right; height: 20px; }
#a { background: #12495d; color:white;}
#b { background: #32baed;color:white; }
#c { background: #060;color:white; }
#d { background: #ff0000;color:white; }
#E { background: #12495d;color:white; }
#z { background:blue; color:white; }
</style>

<?php



//CONNECTS TO YOUR DATABASE (MODIFY TO YOUR SETTINGS)
$c = mysql_connect("localhost", "itmind4u", "123456");
$db = mysql_select_db("itmind4u_project", $c);
$table = 'student';

$w = 900; //WIDTH OF THE BAR

$jtmk = mysql_query("SELECT COUNT(course) FROM student where course='JTMK'");
$r_jtmk =mysql_result($jtmk, 0);//JTMK//
$a = $r_jtmk/100; //AMOUNT OF DATA #1


$jke = mysql_query("SELECT COUNT(course) FROM student where course='JKE'");
$r_jke =mysql_result($jke, 0);//JTMK//
$b = $r_jke/100; //AMOUNT OF DATA #1

$jkm = mysql_query("SELECT COUNT(course) FROM student where course='JKM'");
$r_jkm = mysql_result($jkm, 0);//JTMK//
$c = $r_jkm/100; //AMOUNT OF DATA #1

$jp = mysql_query("SELECT COUNT(course) FROM student where course='JP'");
$r_jp =mysql_result($jp, 0);//JTMK//
$d = $r_jp/100; //AMOUNT OF DATA #1

$other = mysql_query("SELECT COUNT(course) FROM student where course='OTHER'");
$r_other =mysql_result($other, 0);//JTMK//
$e = $r_other/100; //AMOUNT OF DATA #1


$z = $a + $b + $c + $d + $e; //TOTAL AMOUNT OF ALL DATA

$get=$a+50;
$get1=$b+50;
$get2=$c+50;
$get3=$d+50;
$get4=$e+50;
$get5=$z+50;

$scale = '<table bgcolor=yellow border=0><tr><td><label>JTMK</label></td><td><div class="scale" id="a" style="width: '.$get.'px">'.$a.'%</div></td></tr><br/><tr><td><label>JKE</label></td><td><div class="scale" id="b" style="width: '.$get1.'px">'.$b.'%</div></td></tr><br/><tr><td><label>JKM</label></td><td><div class="scale" id="c" style="width: '.$get2.'px">'.$c.'%</div></td></tr><br/><tr><td><label>JP</label></td><td><div class="scale" id="d" style="width: '.$get3.'px">'.$d.'%</div></td></tr><br/><tr><td><label>OTHER</label></td><td><div class="scale" id="e" style="width: '.$get4.'px">'.$e.'%</div></td></tr><br/><tr><td><label>TOTAL</label></td><td><div class="scale" id="z" style="width: '.$get5.'px">'.$z.'%</div></td></tr></table>';

echo $scale;

?>
				
<?php include("check_online_user.php"); ?> 
	
					

		
	</div>
	
	<div id="footer">
		<p><center>Develope By Administrator E-Studentbook</center></p>
	</div>
</div>
</body>
</html>
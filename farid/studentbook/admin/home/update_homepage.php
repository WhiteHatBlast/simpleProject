<?php
require_once("authadmin.php");
include("config.php");
date_default_timezone_set('Asia/Singapore');
?>
<?php
					if(isset($_POST['save_update_homepage']))
					{
					
					$id=$_POST['id'];
					$title=$_POST['title'];
					$description=$_POST['description'];
					
					$check_and_update=mysql_query("UPDATE admin_update_homepage SET title='".$title."',description='".$description."' WHERE id=".$id." ");
					
					if($check_and_update==TRUE)
					{
					
					echo "<script> alert('Save successfully'); </script>";
					echo '<meta http-equiv="REFRESH" content="0;url=update_homepage.php">';

					
					}
					
					
					
					}
					
					
					if(isset($_REQUEST['id1']))
					{

function Clear($id1)
{
    $id1= str_replace("'", "", $id1);
	 $id1= str_replace("-", "", $id1);
    $id1= str_replace('"', '', $id1);
    $id1= strip_tags($id1);
    $id1= htmlentities($id1);
    return $id1;
}

					
					$id1=Clear($_REQUEST['id1']);
				
					
					$check_and_delete=mysql_query("DELETE FROM admin_update_homepage WHERE id=".$id1." ");
					
					if($check_and_delete==TRUE)
					{
					
					echo "<script> alert('Delete successfully'); </script>";
					echo '<meta http-equiv="REFRESH" content="0;url=update_homepage.php">';

					
					}
					
					
					
					}
					
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
		

<div align="center" style=" margin-top:70px;">
<table bgcolor="#5FF748"  border="0" width="450px">
<td><font color="black"><b><center>Update Homepage ( Administrator )</center></b></font></td>
</table>
<table border="0" bgcolor="#D8F6CE" style="width:450px;">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST"> 
					
					<tr><td><label>Admin</label></td><td>:</td><td><input size=50 type="hidden" name="name" value="<?php echo $_SESSION['admin_username']; ?>"><?php echo $_SESSION['admin_username']; ?></td></tr>
					<tr><td><label>Title</label></td><td>:</td><td><input size=50 type="text" name="title" value="" placeholder="Title" required autofocus></td></tr>
					
					<tr><td><label>Link</label></td><td>:</td><td><input size=50 type="text" name="link" value="" placeholder="link" ></td></tr>
					
					<tr><td><label>Description</label></td><td>:</td><td><textarea rows=5 cols=39 name="description" value="" placeholder="description" required autofocus></textarea></td></tr>
					<tr><td><label>Date</label></td><td>:</td><td><input size=50 type="hidden" name="date" value="<?php echo date('d/m/Y - h:m:s:a');?>"><?php echo date('d/M/Y - h:m:s:a');?></td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td><td><input onclick="return confirm('Are you sure you want to proceed?')"  class="button_studentbook_style"  type="reset" name="reset" value="Clear"><input onclick="return confirm('Are you sure you want to proceed?')"  class="button_studentbook_style"  type="submit" name="submit" value="update homepage"></td></tr>
					</form>
					</table>
</div>

<?php
					
					if(isset($_POST['submit']))
					{
					
					$name=mysql_real_escape_string($_POST['name']);
					$title=mysql_real_escape_string($_POST['title']);
					$link=mysql_real_escape_string($_POST['link']);
					$description=mysql_real_escape_string($_POST['description']);
					$date=mysql_real_escape_string($_POST['date']);
					$time=time();
					
					$getdata="INSERT INTO admin_update_homepage (name,title,link,description,date,time) VALUES('$name','$title','$link','$description','$date','$time')";
					$result=mysql_query($getdata);
					
					if($result)
					
					{
					echo "<center><font color=red><b>Update homepage successfully</b></font></center>";
					echo "<meta http-equiv=REFRESH content=2;url=update_homepage.php>";
					exit();
					mysql_close();
					}
					}
					
					?>
					
					<br/><br/>
					<table width='600' bgcolor="#D8F6CE">
					<th bgcolor="#8EF77E" >Title
					<th bgcolor="#8EF77E">Description
					<th bgcolor="#8EF77E">Date
					<th bgcolor="#8EF77E">Action
				
					
					<?php
					
					
					$check_database_homepage=mysql_query("SELECT*FROM admin_update_homepage");
					while($rows=mysql_fetch_array($check_database_homepage))
					{
					
						echo "
					
			
					
					
					<tr>
					<td>".$rows['title']."</td>
					<td>".$rows['description']."</td>
					<td>".$rows['date']."</td>
					";
					?>
					<td>
					<a class='button_studentbook_style' href='<?php $_SERVER['PHP_SELF']; ?>?id=<?php echo $rows['id']; ?>'><b>Edit</b></a>&nbsp;/&nbsp;<a onclick="return confirm('Are you sure you want to delete?')" class='button_studentbook_style' href='<?php $_SERVER['PHP_SELF']; ?>?id1=<?php echo $rows['id']; ?>'><b>X</b></a>
					<?php
					echo "</td>
				
					
					
					";
					
					
					}
					
					?>
					
					</tr>
					
					</th>
					</th>
					</th>
					</th>
					</table>
					<br/><br/>
					<?php
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


					$id=Clear($_REQUEST['id']);
					$check_database_homepage=mysql_query("SELECT*FROM admin_update_homepage WHERE id=".$id."");
					while($rows=mysql_fetch_array($check_database_homepage))
					{
					echo "
					<form action='".$_SERVER['PHP_SELF']."' method='POST'>
				<table width='600' bgcolor='#D8F6CE'>
					<th bgcolor='#8EF77E'>Title
					<th bgcolor='#8EF77E'>Description

					<th bgcolor='#8EF77E'>Action
			
					
					
					<tr>
					<td><input type='text' name='title' value='".$rows['title']."'></td>
					<td><textarea rows='5' cols='39' name='description' >".$rows['description']."</textarea></td>
				
					<td>
					<input type='hidden' name='id' value='".$id."'>
					<input class='button_studentbook_style' type='submit' name='save_update_homepage' value='Save'></td>
					
					</tr>
				
					</th>
					</th>
					</th>
					</table>
					</form>
					";
					
					
					}
				
					}
					?>

					


	
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
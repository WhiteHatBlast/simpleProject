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
		

<div style=" margin-left:20px; margin-top:20px;">
<table bgcolor="#5FF748"  width="500" border="0" >
<td><font color="black"><b><center>Block user(account)</center></b></font></td>
</table>
<table border="0" width="500" bgcolor="#D8F6CE">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<tr><td><select name="block_user">
<?php

$get_block="SELECT id,username,account_status FROM users";
$block_result=mysql_query($get_block);
while($rows_block=mysql_fetch_array($block_result))
{

echo "<option value=".$rows_block['username'].">".$rows_block['username']."</option>";
}

?>
</select></td><td>
<select name="deactive"><option value="deactive">deactive</option><option value="">active</option></select></td>
<td>

<input  onclick="return confirm('Are you sure you want to Proceed?')" class="button_studentbook_style" type="submit" name="block" value="Deactive/Active"></td></tr>
</form>

</table>


<table bgcolor="#D8F6CE" width="500" border="0">
<th bgcolor="#8EF77E">Bil
<th bgcolor="#8EF77E">Username
<th bgcolor="#8EF77E">Status
<?php 

$check_user_block_info="SELECT id,username,account_status FROM users where account_status='deactive'";
$check_user_block_result=mysql_query($check_user_block_info);
while($rows_block_result=mysql_fetch_array($check_user_block_result))
{
echo "<tr><td align=center>".$rows_block_result['id']."</td><td align=center>".$rows_block_result['username']."</td><td align=center>".$rows_block_result['account_status']."</td></tr>";
}

?>
</th>
</th>
</th>
</table>

<?php

if(isset($_POST['block']))
{
$block_user=$_POST['block_user'];
$deactive_active=$_POST['deactive'];
$check_before_block="SELECT*FROM users where username='".$block_user."'";
$get_result_user=mysql_query($check_before_block);
if($get_result_user==TRUE)
{

$show_success_update="UPDATE users SET account_status='$deactive_active' WHERE username='$block_user'";

mysql_query($show_success_update);
echo '<script> alert("Update User Block/Active successfully ");  </script>';
echo '<meta http-equiv="REFRESH" content="0;url=index.php">
';

}


else

{
echo "error";
}
}

?>
<table bgcolor="#5FF748"  width="500" border="0" >
<td><font color="black"><b><center>User Ip(Online)</center></b></font></td>
</table>
<table border="0" width="500" bgcolor="#D8F6CE">
<th>Ip
<th>Country
<?php

$ip_online_user="SELECT ip,country FROM user_online";
$ip_online_user_check=mysql_query($ip_online_user);
while($rows_ip_online_user_check=mysql_fetch_array($ip_online_user_check))
{

echo "<tr><td align=center>".$rows_ip_online_user_check['ip']."</td>
<td  align=center>".$rows_ip_online_user_check['country']."</td>
</tr>";
}


?>

</th>
</th>



</table>

					<?php
					
					if(isset($_POST['submit']))
{

$ip=$_POST['ip'];
$date=$_POST['date'];

$getdata=mysql_query("SELECT*FROM ip_banned where ip='".$ip."'");
$result=mysql_num_rows($getdata);

if($result>0)
{

echo "<br/><br/><table bgcolor=#D8F6CE border=0><center><td><font color=red><b>Sorry, You cannot submit again, cause u have been submit already!ty</b></font></td></center></table>";

}

else
{

$getdata1="INSERT INTO ip_banned (ip,date) VALUES('$ip','$date')";
$result1=mysql_query($getdata1);

if($result1)

{
echo "<div align=left style='background-position:absolute; margin-top:40px; margin-left:50px;'><table  bgcolor=#D8F6CE border=0><td><font color=red><b>Ip User update successfully</b></font></td></table></div>";



}

else
{

echo "error";


}
}
}
?>
</div>

<div align="left" style=" margin-left:20px;"><form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">


<table bgcolor="#5FF748"  width="500" border="0" width="500">
<td><font color="black"><b><center>IP address Banned</center></b></font></td>
</table>
<table bgcolor="#D8F6CE" height="100" width="500" border="0" width="500">

<tr><td><label>IP</label></td><td>:<input type="text" name="ip" value=""></td></tr>
<tr><td><label>Date</label></td><td>:<input type="hidden" name="date" value="<?php echo date('d-m-Y'); ?>"><?php echo date('d-m-Y'); ?></td></tr>

<tr><td><label>&nbsp;</label></td><td><input onclick="return confirm('Are you sure you want to Proceed?')" class="button_studentbook_style" type="submit" name="submit" value="Banned Ip">
<input class="button_studentbook_style" type="reset" name="reset" value="Clear form"></td>

</tr>


</table>




</form>

<table style="margin-left:0px;" width="500" border="0" bgcolor="#D8F6CE">
<tr><td bgcolor="#5FF748"><label style="color:black;">No&nbsp;&nbsp;&nbsp;Ip Banned</labe></td><td bgcolor="#5FF748"><label style="color:black;"><center>Delete</center></label></td>
<?php 

$getdata="SELECT*FROM ip_banned ";
$result=mysql_query($getdata);
$id=$result['id'];
while($rows=mysql_fetch_array($result))
{


echo "<tr><td bgcolor=#D8F6CE>".$rows['id']."&nbsp;.&nbsp;&nbsp;&nbsp;".$rows['ip']."&nbsp;";
?>

<td align="center" bgcolor="#D8F6CE"><a  onclick="return confirm('Are you sure you want to Proceed?')" class="button_studentbook_style"  href="process_delete_ip.php?id=<?php echo $rows['id']; ?>&ip=<?php echo $rows['ip']; ?> " >Delete</a></td></td></tr>

<?php }


?>
</tr>
<tr><td><form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input style="margin-left:0px;" onclick="return confirm('Are you sure you want to Proceed?')" class="button_studentbook_style" type="submit" name="clear_all" value="Remove all Ip"></td></tr>

</form>
</table>


<?php


if(isset($_POST['clear_all']))
{

$get=mysql_query("TRUNCATE ip_banned");

echo "<font color=red>Remove all ip successfully</font>";
echo "<meta http-equiv=REFRESH content=2;url=index.php>";

}

?>
<br/>



</div>

	
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<?php
	
	include("config.php");
	$get_maintenance_info=mysql_query("SELECT*FROM maintenance");
	$result=mysql_fetch_assoc($get_maintenance_info);

if($result['status']=='maintenance')
{

echo '<input type="hidden" name="status_maintenance" value="unmaintenance">';
?>

	<input class="button_studentbook_style" onclick="return confirm('Are you sure you want to Proceed?')"   type="submit" name="active_not_active" value="unmaintenance">
<?php
}
else if ($result['status']=='unmaintenance')

{

echo '<input type="hidden" name="status_maintenance" value="maintenance">';

?>
	<input onclick="return confirm('Are you sure you want to Proceed?')" class="button_studentbook_style" type="submit" name="active_not_active" value="maintenance">
<?php
}

echo "<br/>Server Status now :<b>".$result['status']."</b>";
	
	?>
	
	</form>
	
	<?php
	if(isset($_POST['active_not_active']))
	{
	$status_maintenance=$_POST['status_maintenance'];
	
	$result1=mysql_query("UPDATE maintenance SET status='$status_maintenance'");
	if($result1)
	{
	echo "change $status_maintenance successfully";
	echo '<meta http-equiv="REFRESH" content="2;url=index.php">
';
	
	}
	
	else
	{
	
	
	}
	
	}
	
	?>
	


<?php
include("config.php");
if(isset($_POST['send_url']))
{

$get_url=$_POST['get_url_admin'];
$get_session=$_SESSION['admin_username'];

$update_new_path=mysql_query("UPDATE switch_path SET url_path='$get_url' WHERE admin_username='$get_session'");
if($update_new_path==TRUE)
{

echo "<script> alert('update new path successfully'); </script>";
echo '<meta http-equiv="REFRESH" content="0;url=index.php">';

}




}


if(isset($_POST['delete_path']))
{

$get_url1=$_POST['delete_the_path'];
$get_session=$_SESSION['admin_username'];

$update_new_path=mysql_query("UPDATE switch_path SET url_path='$get_url1' WHERE admin_username='$get_session'");
if($update_new_path==TRUE)
{

echo "<script> alert('delete successfully'); </script>";
echo '<meta http-equiv="REFRESH" content="0;url=index.php">';

}




}

?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="text" name="get_url_admin" value=""><br/>
<input type="submit" name="send_url" value="Add Path"><br/>
</form>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="hidden" name="delete_the_path" value=""><br/>
<input type="submit" name="delete_path" value="delete path"><br/>
</form>


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
					
					
					<table bgcolor="#5FF748" width="290" border="0">
					<td><center><b style="color:black;">Total Visitor</b></center></td>
					</table>
					<table bgcolor="#D8F6CE" width="290" border="0">
					<th bgcolor="#8EF77E" style="color:black;">Itmind4u Visitor
				
					<?php
					include("config.php");
					$result_total = mysql_query("SELECT*FROM total_visitor");
					$count_total = mysql_num_rows($result_total);
					

					
					
					
					echo "<tr><td ><center>&nbsp;&nbsp;&nbsp;$count_total</center></td></tr>";
					
					
					?>
				
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

<?php include("../../user/home/link_button_studentbook.php"); ?>

<?php include("../../user/home/button_studentbook_style.php"); ?>


</body>
</html>
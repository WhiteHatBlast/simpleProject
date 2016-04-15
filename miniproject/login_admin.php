<?php
session_start();
if(isset($_POST['admin_logout']))
{

session_destroy();
echo "<script> alert('Logout successfully'); </script>";
echo '<meta http-equiv="REFRESH" content="0;url=login_admin.php">';

}
?>
<html>
<head><title>admin LOGIN</title></head>
<body>
  <script type="text/javascript">
function showStuff(id, text, btn) {
    document.getElementById(id).style.display = 'block';
    // hide the lorem ipsum text
    document.getElementById(text).style.display = 'none';
    // hide the link
    btn.style.display = 'none';
}
</script>




<?php
include("connectmysql.php");

if(isset($_SESSION['admin_username']))
{
echo "SELAMAT DATANG <font style='font-weight:bold;'>Admin ".$_SESSION['admin_username']."</font>";

echo 
'

<form action='.$_SERVER['PHP_SELF'].' method="POST">

<input type="submit" name="admin_logout" value="logout">

</form>

';
include("stu_detail.php");

echo "<br/>";

if(isset($_POST['create_new_project']))
{

if($_POST['project_title']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the Project title</span></center>";

}

else if($_POST['student_name1']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the 1 student name</span></center>";

}

else if($_POST['student_name2']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the 2 student name</span></center>";

}

else if($_POST['student_name3']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the 3 student name</span></center>";

}


else if($_POST['student_name4']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the 4 student name </span></center>";

}

else if($_POST['student1_matric']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the student 1 matric </span></center>";

}

else if($_POST['student2_matric']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the student 2 matric </span></center>";

}

else if($_POST['student3_matric']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the student 3 matric </span></center>";

}


else if($_POST['student4_matric']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the student 4 matric </span></center>";

}

else if($_POST['student1_class']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the student 1 class </span></center>";

}


else if($_POST['student2_class']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the student 2 class </span></center>";

}

else if($_POST['student3_class']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the student 3 class </span></center>";

}


else if($_POST['student4_class']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill the student 4 class </span></center>";

}



else
{

$project_title=$_POST['project_title'];

$student_name1=$_POST['student_name1'];
$student_name2=$_POST['student_name2'];
$student_name3=$_POST['student_name3'];
$student_name4=$_POST['student_name4'];

$student1_matric=$_POST['student1_matric'];
$student2_matric=$_POST['student2_matric'];
$student3_matric=$_POST['student3_matric'];
$student4_matric=$_POST['student4_matric'];

$student1_class=$_POST['student1_class'];
$student2_class=$_POST['student2_class'];
$student3_class=$_POST['student3_class'];
$student4_class=$_POST['student4_class'];

$insert_new_project=mysql_query("INSERT INTO student_group_project(project_title,student_name1,student1_matric,student1_class,student_name2,student2_matric,student2_class,student_name3,student3_matric,student3_class,student_name4,student4_matric,student4_class) VALUES('$project_title','$student_name1','$student1_matric','$student1_class','$student_name2','$student2_matric','$student2_class','$student_name3','$student3_matric','$student3_class','$student_name4','$student4_matric','$student4_class')");


if($insert_new_project==TRUE)
{

echo "<script> alert('registered new student project'); </script>";
echo '<meta http-equiv="REFRESH" content="0;url=login_admin.php">';


}



}


}

echo

 '
 <center>';
 
 ?>
 
 <a href="#" onclick="showStuff('answer1', 'text1', this); return false;"><button>ADD NEW PROJECT</button></a>
<span id="answer1" style="display: none;"><br/>


 <?php
 
 echo '
<table border="0" cellpadding="5" width="645" bgcolor="#b8f786">
 <form action='.$_SERVER['PHP_SELF'].' method="POST">

<tr><td>Project Title :</td><td><input size="50" type="text" name="project_title"></td></tr>
<tr><td>Student 1:</td><td><input type="text" size="50" name="student_name1"></td></tr>
<tr><td>Matric :</td><td><input type="text" size="50" name="student1_matric"></td></tr>
<tr><td>Class :</td><td><input type="text" size="50" name="student1_class"></td></tr>

<tr><td>Student 2:</td><td><input type="text" size="50" name="student_name2"></td></tr>
<tr><td>Matric :</td><td><input type="text" size="50" name="student2_matric"></td></tr>
<tr><td>Class :</td><td><input type="text" size="50" name="student2_class"></td></tr>

<tr><td>Student 3:</td><td><input type="text" size="50" name="student_name3"></td></tr>
<tr><td>Matric :</td><td><input type="text" size="50" name="student3_matric"></td></tr>
<tr><td>Class :</td><td><input type="text" size="50" name="student3_class"></td></tr>

<tr><td>Student 4:</td><td><input type="text" size="50" name="student_name4"></td></tr>
<tr><td>Matric :</td><td><input type="text" size="50" name="student4_matric"></td></tr>
<tr><td>Class :</td><td><input type="text" size="50" name="student4_class"></td></tr>
<tr><td>&nbsp;</td><td><input type="reset"  name="reset"><input type="submit"  name="create_new_project"></td></tr>


 
 </form>
 </table></center>

';
?>
</span>
<?php

echo "<br/>";



include("ass_form.php");



}
else
{


if(isset($_POST['admin_login']))
{

if($_POST['admin_username']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill your Username</span></center>";


}

else if($_POST['admin_password']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill your Password</span></center>";

}
else
{

$admin_username=$_POST['admin_username']; //check matric true or not //

$check_matric_database=mysql_query("SELECT*FROM admin_control WHERE admin_username='".$admin_username."'");

if(mysql_num_rows($check_matric_database)==1)
{

$admin_password=$_POST['admin_password']; //check password true or not //
$check_admin_password=mysql_query("SELECT*FROM admin_control WHERE admin_password='".$admin_password."'");

if(mysql_num_rows($check_admin_password)==1)
{

while($start_session_matric=mysql_fetch_array($check_admin_password))
{

$_SESSION['admin_username']=$start_session_matric['admin_username'];
echo '<meta http-equiv="REFRESH" content="0;url=login_admin.php">';


}

}
else
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Your password is wrong</span></center>";

}

}

else
{
echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Username does not existed</span></center>";

}

}

}

?>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">ADMIN LOGIN</p>
<div align="center">
  <form  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <table cellpadding="5"  bgcolor="#b8f786" width="356" height="95" border="0">
    <tr>
      <td width="82">Username : </td>
      <td width="228"><input name="admin_username" type="text" size="30">&nbsp;</td>
    </tr>
    <tr>
      <td>Password : </td>
      <td width="228"><input name="admin_password" type="password" size="30">&nbsp;</td>
    </tr>
  </table>

    <input name="admin_login" type="submit" id="LOGIN" value="LOGIN">
	   <input name="reset" type="reset" id="reset" value="CLEAR">
  </form>
  <p>&nbsp;</p>
</div>

<?php } ?>

<style>
  body{
  background-color:#8fe34c;
  
  
  }
  
  </style>
  



  </body>
  </html>
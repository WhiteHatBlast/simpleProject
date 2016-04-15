<?php
session_start();
if(isset($_POST['student_logout']))
{

session_destroy();
echo "<script> alert('Logout successfully'); </script>";
echo '<meta http-equiv="REFRESH" content="0;url=login_student.php">';

}
?>
<html>
<head><title>STUDENT LOGIN</title></head>
<body>
<?php
include("connectmysql.php");

if(isset($_SESSION['fullname_student']))
{
echo "SELAMAT DATANG <font style='font-weight:bold;'>".$_SESSION['fullname_student']."</font>";

echo 
'

<form action='.$_SERVER['PHP_SELF'].' method="POST">

<input type="submit" name="student_logout" value="logout">

</form>

';



}
else
{

if(isset($_POST['student_login']))
{

if($_POST['matric']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill your matric Number</span></center>";


}

else if($_POST['user_password']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill your Password</span></center>";

}
else
{

$matric=$_POST['matric']; //check matric true or not //

$check_matric_database=mysql_query("SELECT*FROM student WHERE matric='".$matric."'");

if(mysql_num_rows($check_matric_database)==1)
{

$user_password=$_POST['user_password']; //check password true or not //
$check_student_password=mysql_query("SELECT*FROM student WHERE user_password='".$user_password."'");

if(mysql_num_rows($check_student_password)==1)
{

while($start_session_matric=mysql_fetch_array($check_student_password))
{

$_SESSION['fullname_student']=$start_session_matric['fullname_student'];
echo '<meta http-equiv="REFRESH" content="0;url=login_student.php">';


}

}
else
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Your password is wrong</span></center>";

}

}

else
{
echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Matric does not existed</span></center>";

}

}

}


?>
  <form name="<?php $_SERVER['PHP_SELF']; ?>" method="post" action="">
<p align="center">&nbsp;</p>
<p align="center">WELCOME TO STUDENT ASSESSMENT ONLINE</p>
<p align="center">STUDENT LOGIN</p>
<div align="center">
  <table width="356" height="95"  CELLPADDING="5" bgcolor="#b8f786" border="0">
    <tr>
      <td width="82">Matric No : </td>
      <td width="228"><input name="matric" type="text" size="30">&nbsp;</td>
    </tr>
    <tr>
      <td>Password : </td>
      <td width="228"><input name="user_password" type="password" size="30">&nbsp;</td>
    </tr>
  </table>

   <input name="RESET" type="reset" id="reset" value="CLEAR"> <input name="student_login" type="submit" id="LOGIN" value="LOGIN">
  </form>
  
  <?php
  
  }
  
  ?>


  <style>
  body{
  background-color:#8fe34c;
  
  
  }
  
  </style>
  </body>
  </html>


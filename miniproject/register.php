<html>
<head><title>Registration</title></head>
<body>
<?php
include("connectmysql.php");
if(isset($_POST['register_now']))
{

if($_POST['fullname_student']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill your full name</span></center>";

}

else if($_POST['user_password']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill your Password</span></center>";

}

else if($_POST['matric']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill your Matrix Number</span></center>";

}

else if($_POST['class']=="")
{

echo "<center><span  style='color:red; font-weight:bold;'> Sorry,Please fill your Class name</span></center>";

}

else
{

$fullname_student=$_POST['fullname_student'];
$user_password=$_POST['user_password'];
$matric=$_POST['matric'];
$class=$_POST['class'];

$insert_into_database=mysql_query("INSERT INTO student(fullname_student,user_password,matric,class) VALUES('$fullname_student','$user_password','$matric','$class')");

if($insert_into_database==TRUE)
{

echo "<script> alert('Registration Done'); </script>";
echo '<meta http-equiv="REFRESH" content="0;url=login_student.php">';

}


}


}

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<div align="center">
  <p>&nbsp;</p>
  <p><strong>REGISTER
  </strong></p>


  <table width="355" height="127" border="0" cellpadding="5" bgcolor="#b8f786" align="center">
    <tr>
      <th width="90" scope="row"><div align="left">Full Name : </div></th>
      <td width="249">
        <label for="name"></label>
        <div align="center">
          <input type="text" name="fullname_student" id="name" size="30">
        </div>
</td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Password :</div></th>
      <td>
        <label for="password"></label>
        <div align="center">
          <input type="password" name="user_password" id="password" size="30">
        </div>
</td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Matric. No :</div></th>
      <td>
        <label for="matric"></label>
        <div align="center">
          <input type="text" name="matric" id="matric" size="30">
        </div>
 </td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Class :</div></th>
      <td>
        <label for="class"></label>
        <div align="center">
          <input type="text" name="class" id="class" size="30">
        </div>
  </td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="reset" name="reset" value="CLEAR"><input name="register_now" type="submit" id="LOGIN" value="REGISTER"></td>
    </tr>
  </table>


   


  </form>
  <style>
  body{
  background-color:#8fe34c;
  
  
  }
  
  </style>
  </body>
  </html>


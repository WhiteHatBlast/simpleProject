<?php
require_once('authadmin.php');
include("config.php");
?>
<form action="profile_update_process.php" method="POST">
<?php
$id=$_GET['id'];
$admin_username=$_GET['admin_username'];



$get_from_form="SELECT*FROM admin where id=$id AND admin_username='".$admin_username."'";
$go_update=mysql_query($get_from_form);
if(mysql_num_rows($go_update)>0)
{


while($rows=mysql_fetch_array($go_update))
{

echo "<table bgcolor=#04B431 width=300 border=0 >
<td><font color=white><b><center>Edit Profile</center></b></font></td>
</table><table border=0 bgcolor=#dcfbd7 width=300><tr><td ><label>Username</label></td><td><input type='text' size=30 name='admin_username' value=".$admin_username."></td></tr>

<tr><td ><label>Nickname</label></td><td><input type='text' size=30 name='nickname' value=".$rows['nickname']."></td></tr>

<tr><td ><label>Email</label></td><td><input type='text' size=30 name='email' value=".$rows['email']."></td></tr>

<tr><td ><label>&nbsp;</label></td><td><input type='submit' size=30 name='submit' value='Update Profile'>
<input type='button' onclick='close_window();' value='Close'>

</td></tr>



</table>";
}

mysql_close();

}




?>
</form>

<script>
function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}

</script>

<style type="text/css">
body{

background-color:#8EF77E;
}

</style>



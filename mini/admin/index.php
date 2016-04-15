<?php
session_start();
include('connectmysql.php');
if(isset($_POST['logmasuk']))
{

$admin_email=$_POST['admin_email'];
$admin_katalaluan=$_POST['admin_katalaluan'];

$check_data_user="SELECT*FROM admin where admin_email='$admin_email' AND admin_katalaluan='$admin_katalaluan'";
$result_data=mysql_query($check_data_user);

while($rows=mysql_fetch_array($result_data))
{

if($rows['admin_katalaluan']==$_POST['admin_katalaluan'])
{

$_SESSION['admin_email']=$rows['admin_email'];
$_SESSION['nama_admin']=$rows['nama_admin'];

header('Location:index.php');

}

else

{
echo "<script> alert('login  failed'); </script>";

}

}




}

?>

<?php  


if(!isset($_SESSION['nama_admin']) || (trim($_SESSION['nama_admin']) == ''))
{

echo "Log-Masuk => Admin ";


}

else

{

echo "Welcome !".$_SESSION['nama_admin'];

echo "<form action='index.php' method='POST'><input type='submit' name='keluar' value='keluar'></form><a href='../../mini/index.php'>Homepage</a><br/><br/>";


$show_database=mysql_query("SELECT*FROM admin_post");


echo '<table border="0" bgcolor="gold">
<th>#
<th>Tajuk
<th>Maklum
<th>Action

';


while($show_data=mysql_fetch_array($show_database))
{

echo '
<tr>
<td>'.$show_data['id'].'</td>
<td>'.$show_data['tajuk'].'</td>
<td>'.$show_data['maklum'].'</td>
<td><a href='.$_SERVER['PHP_SELF'].'?id_edit='.$show_data['id'].'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='.$_SERVER['PHP_SELF'].'?id_delete='.$show_data['id'].'>Delete</a></td>

</tr>
';



}

echo '
</th>
</th>
</th>
</th>
</table><br/><br/>';

if(isset($_REQUEST['id_delete']))
{

$id_delete=$_REQUEST['id_delete'];


$delete_post=mysql_query("DELETE FROM admin_post WHERE id=".$id_delete."");

if($delete_post==TRUE)


{

echo "<script> alert('Delete post sucessfully'); </script>";
echo "<meta http-equiv='refresh' content='0;URL=index.php'>";

}




}

if(isset($_REQUEST['id_edit']))
{

$id_edit=$_REQUEST['id_edit'];

$edit_data_post=mysql_query("SELECT*FROM admin_post WHERE id=".$id_edit."");

while($rows=mysql_fetch_array($edit_data_post))
{
echo '
<table bgcolor="gold">
<th>Tajuk
<th>Maklum
<th>Action

<tr>
<form action='.$_SERVER['PHP_SELF'].' method="POST">
<td><input type="text" name="save_tajuk" value="'.$rows['tajuk'].'"></td>
<td><textarea cols="30" rows="5" name="save_maklum">'.$rows['maklum'].'</textarea></td>

<td>
<input type="hidden" name="id_save" value='.$id_edit.'>
<input type="submit" name="save_post" value="save"></td>
</form>

</tr>

</th>
</th>
</table>
';

}



}

if(isset($_POST['save_post']))
{

$id_save=$_POST['id_save'];
$save_tajuk=$_POST['save_tajuk'];
$save_maklum=$_POST['save_maklum'];
$save_data=mysql_query("UPDATE admin_post SET tajuk='$save_tajuk',maklum='$save_maklum' WHERE id=".$id_save."");

if($save_data==TRUE)
{

echo "<script> alert('edit post save successfully'); </script>";
header('Location:index.php');

}



}


}

?> 

<?php
if(isset($_POST['keluar']))
{


session_destroy();

echo "you have logout successfully<img src='img/loading-gif.gif'>

<meta http-equiv='refresh' content='2;URL='index.php'' /> ";

}

?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
		
		<body>
		<center>
		<?php if(isset($_SESSION['nama_admin']) == '')
{
 ?>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<table bgcolor="gold">
		<tr>
		<tr><td>Email:</td><td><input type="text" name="admin_email" value="" placeholder="email" required autofocus></td></tr>
		<tr><td>Password:</td><td><input type="password" name="admin_katalaluan" value="" placeholder="katalaluan" required autofocus></td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" name="logmasuk" value="Log Masuk" >
		<input type="reset" name="reset" value="Clear" ></td></tr>
		</tr>
		
		</table>
		</form>
		
		<?php 
		}
		
		?>
		</center>
</body>
</html>

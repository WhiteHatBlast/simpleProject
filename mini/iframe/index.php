<?php 
session_start();
include("connectmysql.php");


if(isset($_SESSION['nama_admin']))
{

echo "
<form action=".$_SERVER['PHP_SELF']." method='POST'>
<table>
<tr><td>Tajuk :</td><td><input type='text' size='65' name='tajuk' value=''></td></tr>
<tr><td>Maklum :</td><td><textarea name='maklum' rows='20' cols='50'></textarea></td></tr>
<tr><td>&nbsp;</td><td><input type='submit' name='new_post_homepage' value='post'><input type='reset' name='reset' value='clear'></td></tr>


</table>
</form>


";

if(isset($_POST['new_post_homepage']))

{


$tajuk=$_POST['tajuk'];
$maklum=$_POST['maklum'];

$insert_new_database=mysql_query("INSERT INTO admin_post(tajuk,maklum) VALUES('$tajuk','$maklum')");


if($insert_new_database==TRUE)
{


echo "<script> alert('add new post successfully'); </script>";

}



}



}

else
{

?>

<html>
<head><title></title></head>
<body>

<?php

$show_data=mysql_query("SELECT*FROM admin_post");
while($show=mysql_fetch_array($show_data))
{

echo '

<table border="2">

<tr><td>Tajuk : </td><td>'.$show['tajuk'].'</td></tr>

<tr><td>Maklum :</td><td>'.$show['maklum'].'</td></tr>

</table><br/>



';



}



?>
</body>
</html>




<?php
}

?>
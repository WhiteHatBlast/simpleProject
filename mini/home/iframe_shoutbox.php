<?php
include("connectmysql.php");
if(isset($_POST['post_message']))
{

$Nama_Pengguna=$_POST['Nama_Pengguna'];
$message=$_POST['message'];

$insert_to_databsse=mysql_query("INSERT INTO shoutbox(Nama_Pengguna,message) VALUES('$Nama_Pengguna','$message')");
if($insert_to_databsse==TRUE)

{
echo "<script> alert('Message telah Berjaya Dihantar'); </script>";

}


}
?>

<html>
<head><title>Shoutbox</title>




</head>


<body>

<div align="center">

<table border="0"> <!--  Start Edit shoutbox !-->
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

<tr><td><label>Nama_Pengguna:</label><br/><input type="text" name="Nama_Pengguna" value="" size="18"></td></tr>
<tr><td><label>Comment :</label><br/><input type="text" name="message" value="" size="18"></td></tr>
<tr><td><label>&nbsp;</label><br/><input type="submit" name="post_message" value="Hantar"></td></tr>
<tr><td><br><label><b align="center">Pengguna Hantar <img src="../img/arrow.png"></b></label><br/></td></tr>
<?php
$get_database_result=mysql_query("SELECT*FROM shoutbox order by id DESC");

while($rows=mysql_fetch_array($get_database_result))
{

echo "<tr><td bgcolor='yellow'><label>&nbsp;</label><br/>Post by :".$rows['Nama_Pengguna']."<br/>";
echo "Message :".$rows['message']."</td></tr>";


}


?>




</form>
</table><!--  End Edit shoutbox !-->


</div>
<style>
body{

background-color:gold;

}

</style>
</body>
</html>

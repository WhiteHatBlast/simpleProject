<?php
include("connectmysql.php");
session_start();
date_default_timezone_set('Asia/Singapore');
?>

<?php
//kawasan untuk admin pos

$getdata="SELECT*FROM admin_update_homepage ORDER BY id DESC LIMIT 5";
$result=mysql_query($getdata);

$get_time=time();

if(mysql_num_rows($result)>0)
{
while($row=mysql_fetch_array($result))
{
$get_user_time=$row['time']+500;
$link=$row['link'];


echo "<table width='690'><tr><td><hr></hr></td></tr><tr><td><font color=orange>Post</font> by <font color=blue>admin</font>: <b>".$row['name']."</b></a></td></tr>";
echo "<tr><td>Title:<b>".$row['title']."</b></td></tr>";
echo "<tr><td>".$row['description']."<br/>Date post:".$row['date']."</td></tr>";

echo "<tr><td><a href='$link' target=_blank'>$link</a>";



if($get_time<$get_user_time)
{
echo "<div align=right ><a><font color=red>Latest Post</font></a></div>";


}
else
{
echo "<div align=right ><a><font color=red>Older Post</font></a></div></td></tr>";
}




}
}







?>
<tr><td><hr></hr></td></tr>
</table>
<style>
a{
text-decoration:none;

}

</style>

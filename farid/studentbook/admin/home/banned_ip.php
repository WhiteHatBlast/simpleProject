<?php
require_once("authadmin.php");
include("config.php");


if(isset($_POST['submit']))
{

$ip=$_POST['ip'];
$date=$_POST['date'];

$getdata=mysql_query("SELECT*FROM ip_banned where ip='".$ip."'");
$result=mysql_num_rows($getdata);

if($result>0)
{

echo "<center><font color=red>Sorry, You cannot submit again, cause u have been submit already!ty</font></center>";

}

else
{

$getdata1="INSERT INTO ip_banned (ip,date) VALUES('$ip','$date')";
$result1=mysql_query($getdata1);

if($result1)

{
echo "<center><font color=red>Ip User update successfully</font></center>";



}

else
{

echo "error";


}
}
}
?>

<div align="center"><form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table border="1" width="300">

<tr><td><label>IP</label></td><td>:<input type="text" name="ip" value=""></td></tr>
<tr><td><label>Date</label></td><td>:<input type="hidden" name="date" value="<?php echo date('d-m-Y'); ?>"><?php echo date('d-m-Y'); ?></td></tr>

<tr><td><label>&nbsp;</label></td><td><input type="submit" name="submit" value="Banned Ip">
<input type="reset" name="reset" value="Clear form"></td>

</tr>


</table>


</form></div>





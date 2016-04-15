<?php
include("config.php");

if(isset($_POST['user_say_yes']))

{

$say_yes="/";
$ip=$_SERVER['REMOTE_ADDR'];



$check_first=mysql_query("SELECT*FROM student_poll WHERE ip='".$ip."'");
$check_la=mysql_num_rows($check_first);

if($check_la==1)
{
echo "IP Connection :".$ip."<br/>";
echo "Sorry your ip has been used before, ty for your vote before :)";
exit;
}

else
{

$insert_to_database=mysql_query("INSERT INTO student_poll(Yes,ip) VALUES('$say_yes','$ip')");

if($insert_to_database==TRUE)
{
echo "IP Connection :".$ip."<br/>";
echo "Thank your voting";

}

else
{

echo "failed";
exit;

}



}

}

else if(isset($_POST['user_say_no']))
{


$say_No="X";
$ip=$_SERVER['REMOTE_ADDR'];


$check_first=mysql_query("SELECT*FROM student_poll WHERE ip='".$ip."'");
$check_la=mysql_num_rows($check_first);

if($check_la==1)
{
echo "IP Connection :".$ip."<br/>";
echo "Sorry your ip has been used before, ty for your vote before :)";
exit();
}

else
{

$insert_to_database=mysql_query("INSERT INTO student_poll(No,ip) VALUES('$say_No','$ip')");

if($insert_to_database==TRUE)
{
echo "IP Connection :".$ip."<br/>";
echo "Thank your voting";

}

else
{

echo "failed";
exit();

}



}





}

else
{


}

?>

<html>
<title>Poll Statistic</title>
<h3>Do you Like on the next semester have a program PHP script ?</h3>
<?php
$get_yes_vote="/";
$get_info_database=mysql_query("SELECT*FROM student_poll WHERE Yes='".$get_yes_vote."'");
$get_yes_data=mysql_num_rows($get_info_database);


$get_no_vote="X";
$get_info1_database=mysql_query("SELECT*FROM student_poll WHERE No='".$get_no_vote."'");
$get_no_data=mysql_num_rows($get_info1_database);

$total=$get_yes_data+$get_no_data;
echo 

'
<table border="0" width="500">
<th>#
<th>Vote(Yes)
<th>Vote(No)
<th>Total Vote
<tr>

<td><center>1</center></td>
<td><center>'.$get_yes_data.'</center></td>
<td><center>'.$get_no_data.'</center></td>
<td><center>
'.$total.'</center>
</td>

</tr>

</th>
</th>
</th>
</th>

</table>
';




?>
<br/>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

<input type="submit" name="user_say_yes" value="Vote Yes"/>
<input type="submit" name="user_say_no" value="Vote No"/>

</form>

<style>
th{
background-color:gold;


}
tr{
background-color:orange;

}

table{

background-color:black;

}

</style>

<footer><center>Develope By Faridblaster</center></footer>
</html>
<?php
$host="localhost";
$username="root";
$password="";
$database_name="farid";

$check_database=mysql_pconnect($host,$username,$password) or die("cannot connect to database");
$result=mysql_select_db($database_name,$check_database);

if($result==TRUE)
{

echo "connected";
}

else

{
echo "failed";

}

$get_current_id="user_password";
$get_new_id="try";
$format_type="VARCHAR";
$length="100";

$modify_table=mysql_query("ALTER TABLE  student CHANGE  $get_current_id  $get_new_id $format_type($length) NOT NULL ");

$fetch_data_column=mysql_query("SELECT*FROM student");

echo '<table border=1>';
while($show_data=mysql_fetch_array($fetch_data_column))
{




echo $show_data['var_column'];












$fetch_data_rows=mysql_query("SELECT*FROM relate_rows WHERE id='".$show_data['id']."'");


while($show_data_rows=mysql_fetch_array($fetch_data_rows))
{

echo "<tr>";
echo $show_data_rows['var_rows'];
echo "</tr>";


}





}

echo '</table>';
?>




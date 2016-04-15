<?php
include("conf.php");
if(isset($_POST['create_new_table']))
{

$tablecolumn=$_POST['create_column'];
$tablerows=$_POST['create_rows'];



$inset_to_database=mysql_query("INSERT INTO testingtable (column_num,rows_num) VALUES('$tablecolumn','$tablerows')");

if($inset_to_database==TRUE)
{

echo "Create Table Success";

}


else{

echo "Create Table Failed";

}


}


else

{



?>

<html>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<select name="create_column">

<option value="1">1</option>
<option value="2">2</option>

</select>

<select name="create_rows">

<option value="2">2</option>
<option value="4">4</option>

</select>
<input type="submit" name="create_new_table" value="Create Now"/>
</form>



<?php 

$check_table=mysql_query("SELECT*FROM testingtable");

$number=0;
$number1=0;
$rows=2;
$column=3;
echo '<table border=1>';

for($number;$number<$column;$number++)
{

echo '

<th> hehe</th>
';

}
echo '<tr>';
for($number1;$number1<$rows;$number1++)
{

echo '
<td>as</td>

';



}
echo '</tr>';
echo '</table>';








} ?>
</html>
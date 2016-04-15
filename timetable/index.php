<?php
include("conf.php");

$fecth_datab=mysql_query("SELECT*FROM header");

echo '<table border="1">';
while($show=mysql_fetch_array($fecth_datab))
{

$get_id=$show['id'];

if(!$show['header_name']==NULL)
{
echo "<th>".$show['header_name']."</th>";
}
else
{

echo "<th>N/A</th>";

}



}



$fecth_datab1=mysql_query("SELECT*FROM column_table");

$number_check=0;

echo '<tr>';
while($show1=mysql_fetch_array($fecth_datab1))
{

if(!$show1['column_name']==NULL)
{

echo "<td>".$show1['column_name']."</td>";

}

else
{

echo "<td>N/A</td>";

}

$number_check++;

if($number_check==2)
{
echo "</tr><tr>";

}


}

echo '</tr>';

echo '</table>';

?>
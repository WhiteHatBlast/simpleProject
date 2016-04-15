<?php
require_once("authadmin.php");
include("config.php");
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<select name="course">
<option value="JTMK">JTMK</option>
<option value="JKE">JKE</option>
<option value="JKM">JKM</option>
<option value="JP">JP</option>
<option value="OTHER">OTHER</option>

</select>
<input type="submit" name="search" value="Search">
</form>
<table bgcolor="#5FF748"  width="600" border="0" >
<td><font color="black"><b><center>Files Management</center></b></font></td>
</table>
<table border="0" width="600" bgcolor="#8EF77E">
<th style=" background-color:#8EF77E; width:90px;">Upload By
<th style=" background-color:#8EF77E;">Course
<th style=" background-color:#8EF77E;">Description
<th style=" background-color:#8EF77E;">Filename
<th style=" background-color:#8EF77E;">Date
<th style=" background-color:#8EF77E;">Remove
 <?php
//file management user//
if(isset($_POST['search']))
{
$course=$_POST['course'];
$get_file="SELECT*FROM upload WHERE course='".$course."' ORDER BY id DESC";
$get_back_from_files=mysql_query($get_file);
if(mysql_num_rows($get_back_from_files)>0)
{

while($rows_file=mysql_fetch_array($get_back_from_files))
{

echo "<tr><td style= background-color:#D8F6CE; align=center>".$rows_file['upload_by']."</td>

<td style= background-color:#D8F6CE; align=center>".$rows_file['course']."</td>

<td style= background-color:#D8F6CE; align=center>".$rows_file['description']."</td>

<td style= background-color:#D8F6CE; align=center>".$rows_file['name']."</td>

<td style= background-color:#D8F6CE; align=center>".$rows_file['date']."</td>";





?> 
<td style="background-color:#D8F6CE;" align="center"><a class="button_studentbook_style" href="file_management_process.php?id=<?php echo $rows_file['id']; ?>&upload_by=<?php echo $rows_file['upload_by']; ?>" onClick="return confirm('Are you sure you want to delete?')"><b style="color:white;">X</b></a></td>



</tr>
<?php
}
}
}
else

{

echo "<tr><td><center><h4><font color=red>No Files Is show</font></h4></center></td></tr>";
}

?>
 
 
  
  
  


</th>
</th>
</th>
</th>
</th>
</th>
</table>




<table bgcolor="#5FF748"  width="600" border="0" >
<td><font color="black"><b><center>Files Category Management</center></b></font></td>
</table>
<table border="0" width="600" bgcolor="#8EF77E">
<th style=" background-color:#8EF77E; width:90px;">Upload By
<th style=" background-color:#8EF77E;">Course
<th style=" background-color:#8EF77E;">Description
<th style=" background-color:#8EF77E;">Category
<th style=" background-color:#8EF77E; ">Upload Date
<th style=" background-color:#8EF77E;">Remove
 <?php
//file management user//
$get_file_info="SELECT*FROM info_software";
$get_back_from_files_info=mysql_query($get_file_info);
if(mysql_num_rows($get_back_from_files_info)>0)
{

while($rows_file_info=mysql_fetch_array($get_back_from_files_info))
{

echo "<tr><td style= background-color:#D8F6CE; align=center>".$rows_file_info['nickname']."</td>

<td style= background-color:#D8F6CE; align=center>".$rows_file_info['course']."</td>

<td style= background-color:#D8F6CE; align=center>".$rows_file_info['description']."</td>

<td style= background-color:#D8F6CE; align=center>".$rows_file_info['category']."</td>

<td style= background-color:#D8F6CE; align=center>".$rows_file_info['upload_date']."</td>";





?> 
<td style="background-color:#D8F6CE;" align="center"><a  class="button_studentbook_style" href="file_management_info_process.php?id=<?php echo $rows_file_info['id']; ?>&upload_date=<?php echo $rows_file_info['upload_date']; ?>" onClick="return confirm('Are you sure you want to delete?')"><b style="color:white;">X</b></a></td>




</tr>
<?php
}
}
else

{

echo "<tr><td><center><h4><font color=red>No Files Is show</font></h4></center></td></tr>";
}

?>
 
 
  
  
  


</th>
</th>
</th>
</th>
</th>
</th>
</table>

<body>
<?php include("../../user/home/link_button_studentbook.php"); ?>

<?php include("../../user/home/button_studentbook_style.php"); ?>

</body>

</html>
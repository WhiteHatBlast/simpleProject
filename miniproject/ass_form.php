<?php
if(isset($_REQUEST['id']))
{

$id=$_REQUEST['id'];
$get_student_name=mysql_query("SELECT*FROM student_group_project WHERE id=".$id."");

while($show_student_name=mysql_fetch_array($get_student_name))
{

$student_name1=$show_student_name['student_name1'];
$student_name2=$show_student_name['student_name2'];
$student_name3=$show_student_name['student_name3'];
$student_name4=$show_student_name['student_name4'];

}
?>
<p>&nbsp;</p>
<table width="794" CELLPADDING="5" bgcolor="#b8f786" height="448" border="1" align="center">
  <tr>
    <th colspan="8" scope="row">Assessment</th>
  </tr>
  <tr>
    <th width="33" rowspan="2" scope="row"><div align="center">No.</div></th>
    <td width="124" rowspan="2"><div align="center">Type of Assessment</div></td>
    <td width="77" rowspan="2"><div align="center">Full marks</div></td>
    <td width="49" rowspan="2"><div align="center">Group</div></td>
    <td height="23" colspan="4"><div align="center">Individual</div></td>
  </tr>
  <tr>
    <td width="62"><div align="center"><?php echo $student_name1; ?> (100%)</div></td>
    <td width="21"><div align="center"><?php echo $student_name2; ?>
    (100%)</div></td>
    <td width="34"><div align="center"><?php echo $student_name3; ?>(100%)</div></td>
    <td width="60"><div align="center">
      <p><?php echo $student_name4; ?> (100%)</p>
</div></td>
  </tr>
  <tr>
    <th rowspan="3" scope="row">1.</th>
    <td>Peer Assessment 1</td>
    <td rowspan="3"><div align="center">10 %</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Peer Assessment 2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Peer Assessment 3</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th rowspan="3" scope="row">2.</th>
    <td>Demostration 1</td>
    <td rowspan="3"><div align="center">25 %</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Demostration 2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Demostration 3</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">3.</th>
    <td>Presentation </td>
    <td><div align="center">15 %</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">4.</th>
    <td>Log Book</td>
    <td><div align="center">10 %</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td colspan="7"><div align="center">Capstone</div></td>
  </tr>
  <tr>
    <th scope="row">5.</th>
    <td>Portfolio</td>
    <td><div align="center">5 %</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">6.</th>
    <td>Final Report</td>
    <td><div align="center">20 %</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">7.</th>
    <td>End Product</td>
    <td><div align="center">10 %</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">8.</th>
    <td>User Manual</td>
    <td><div align="center">5 %</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Total </th>
    <td><div align="center"><strong>100</strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<?php } ?>





<p>&nbsp;</p>
<p align="center"><strong>TABLE DATA FOR THE PROJECT</strong></p>
<p>&nbsp;</p>

  
  <?php
  
  $get_data_student=mysql_query("SELECT*FROM student_group_project");
  
  while($show_data_student=mysql_fetch_array($get_data_student))
  {
  echo '
  
  <table width="645" bgcolor="#b8f786" cellpadding="5" height="100" border="0" align="center">
  <tr>
    <th colspan="5" scope="row"><div align="center">STUDENT DETAILS</div></th>
  </tr>
  <tr>
    <th width="44" scope="row"><div align="center">NO.</div></th>
    <td width="215"><div align="center"><strong> NAME</strong></div></td>
    <td width="88"><div align="center"><strong>MATRIX.NO</strong></div></td>
    <td width="49"><div align="center"><strong>CLASS</strong></div></td>

  </tr>
  <tr>
    <th scope="row"><div align="center"> '.$show_data_student['id'].'.</div></th>
    <td>
      <label for="stu1"></label>
      <div align="left">
       '.$show_data_student['student_name1'].'
      </div>
</td>
    <td>
      <label for="matrix1"></label>
      <div align="center">
       '.$show_data_student['student1_matric'].'
      </div>
</td>
    <td>
      <label for="class_stu1"></label>
      <div align="center">
       '.$show_data_student['student1_class'].'
      </div>
</td>
   
  </tr>
  
   <tr>
    <th scope="row"><div align="center"> '.$show_data_student['id'].'.</div></th>
    <td>
      <label for="stu1"></label>
      <div align="left">
       '.$show_data_student['student_name2'].'
      </div>
</td>
    <td>
      <label for="matrix1"></label>
      <div align="center">
       '.$show_data_student['student2_matric'].'
      </div>
</td>
    <td>
      <label for="class_stu1"></label>
      <div align="center">
       '.$show_data_student['student2_class'].'
      </div>
</td>
   
  </tr>
  
   <tr>
    <th scope="row"><div align="center"> '.$show_data_student['id'].'.</div></th>
    <td>
      <label for="stu1"></label>
      <div align="left">
       '.$show_data_student['student_name3'].'
      </div>
</td>
    <td>
      <label for="matrix1"></label>
      <div align="center">
       '.$show_data_student['student3_matric'].'
      </div>
</td>
    <td>
      <label for="class_stu1"></label>
      <div align="center">
       '.$show_data_student['student3_class'].'
      </div>
</td>
   
  </tr>
  
   <tr>
    <th scope="row"><div align="center"> '.$show_data_student['id'].'.</div></th>
    <td>
      <label for="stu1"></label>
      <div align="left">
       '.$show_data_student['student_name4'].'
      </div>
</td>
    <td>
      <label for="matrix1"></label>
      <div align="center">
       '.$show_data_student['student4_matric'].'
      </div>
</td>
    <td>
      <label for="class_stu1"></label>
      <div align="center">
       '.$show_data_student['student4_class'].'
      </div>
</td>
   
  </tr>
  
  <tr>
    <th colspan="2" scope="row"><div align="center">PROJECT TITLE :</div></th>
    <td colspan="2"><div align="center">

        <label STYLE="float:left;" for="title">
        <a href='.$_SERVER['PHP_SELF'].'?id='.$show_data_student['id'].'>'.$show_data_student['project_title'].'</a></label>

    </div></td>
  </tr>
</table>
  ';
  
  }
  
  ?>

  


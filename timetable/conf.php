<?php
$connection=mysql_connect('localhost','root','');
$result=mysql_select_db('timetable_student',$connection);

if($result==TRUE)
{
echo "connected";
}

else

{
echo "failed";
}
?>
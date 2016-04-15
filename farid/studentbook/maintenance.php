<?php
include('connectmysql.php');

$get_maintenance_info=mysql_query("SELECT status FROM maintenance");
$result=mysql_fetch_assoc($get_maintenance_info);

if($result['status']=='maintenance')
{

header('Location:maintenance_show.php');

}

else

{


}

?>
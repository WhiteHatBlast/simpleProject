<?php
session_start();
include("zonetime.php");
include("config.php");
if(isset($_SESSION['cust_username']))
{
echo "welcome ".$_SESSION['cust_username']."<br/>";
echo "<a href='logout.php'><button type='button' class='btn btn-success'>Logout</button></a></div>";
$get_session_no=$_SESSION['no_user'];
}

else
{
header('Location:index.php');

}


?>




<br/>
<center>
<h1>Formating Windows 7 ( Infomation )</h1><br/>



<?php

$number=0;
$number1=0;

$get_data=mysql_query("SELECT*FROM summary WHERE no='$get_session_no'");

$check_database=mysql_num_rows($get_data);

if($check_database==0)
{

echo "nothing to view";

}
else
{
echo '
<table border="1" width="900">
<th>No.
<th>Brand
<th>Model
<th>Customer Name
<th>Rm 
<th>Date Start
<th>Date End
<th>Warranty

 ';



while($show=mysql_fetch_array($get_data))
{


echo '<tr>';



$number++;
$number1++;

echo "<center ><td align='center'>".$number."</td>";
echo "<td align='center'>".$show['brand']."</td>";
echo "<td align='center'>".$show['model']."</td>";
echo "<td align='center'>".$show['customer_name']."</td>";
echo "<td align='center'>".$show['rm']."</td>";
echo "<td align='center'>".$show['date_start']."</td>";
echo "<td align='center'>".$show['date_end']."</td>";




if($show['warranty']>0)
{

$expired=date('d-m-Y');
if(date('d-m-Y',$show['warranty'])==$expired)
{

echo "<td align='center'><span  style='color:white; font-weight:bold; background-color:red'>Warranty Has been expired</span></td>";
}

else
{
echo "<td align='center'><span style=' font-weight:bold; background-color:yellow'>Active until >".date('d-m-Y',$show['warranty'])."</span></td></center>";

}
}

else
{

echo "<td align='center'>No Action</td></center>";
}



}

echo '

</tr>


</th>
</th>
</th>
</th>
</th>
</th>
</th>



</table>

';



} ?>

<html><head><title>Customer Info</title></head>
<link href="css/menustyle.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap-transition.js"></script>

<script src="js/bootstrap-tab.js"></script>

<iframe src="chatting.php" scrolling="no" style="  border: outset;   height:500px;width:610px; overflow:scroll;border:0;"></iframe>

</html>
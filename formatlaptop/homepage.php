<?php
include("config.php");
include("zonetime.php");
include("authentication.php");



?>

<br/><br/><br/>
<center>
<h1>Formating Windows 7 ( Summary )</h1><br/>



<?php

if(isset($_POST['submit_user_send']))
{

$get_value=1+$_POST['get_user_send'];

$number=0;
$number1=0;





$get_data=mysql_query("SELECT*FROM summary ORDER BY no ASC LIMIT $get_value");

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



if($show['date_end']==0)
{
echo "<td ><center><form action=".$_SERVER['PHP_SELF']." method='POST'>
<input type='hidden' name='get_id' value=".$show['no'].">
<input type='submit' class='btn' name='update_submition' value='sent'>

</form></center></td>";




echo '

<style>

input[type=submit]{


width:70px;
height:30px;
}
</style>
';


}
else
{

echo "<td align='center'>".$show['date_end']."</td>";


}

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







if(isset($_POST['reset_all']))
{

$show_result=mysql_query("TRUNCATE summary");

if($show_result==TRUE)


{

echo "Reset all succesfully";
echo "<meta http-equiv='REFRESH' content='0;url=homepage.php'>";

}

else


{

echo "reset failed";
echo "<meta http-equiv='REFRESH' content='0;url=homepage.php'>";

}

}

echo "<br/>&nbsp;&nbsp;Data found is ".$number."&nbsp;&nbsp;";

echo '<br/><br/>
<form action='.$_SERVER["PHP_SELF"].' method="POST">

<input type="submit" class="btn" name="reset_all" value="Reset all"/>

</form>
';

}
}
else
{


?>


<?php
echo '


<table border="0" width="600">

<tr><td>No Result</td></tr>
';
}

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<?php
echo '
<tr><td>

<div align="right" class="input-append">
<select class="span2" name="get_user_send">
<option value="4">4 row</option>
<option value="8">8 row</option>
<option value="16">16 row</option>
<option value="10000">View all</option>
</select>
  <input type="submit" class="btn" name="submit_user_send" value="Search"/>
</div></td></tr>

</table>

</form>


';

?>
</center>
<center>
<?php

if(isset($_POST['add_new']))
{

$brand=$_POST['brand'];
$model=$_POST['model'];
$customer_name=$_POST['customer_name'];
$rm=$_POST['rm'];
$date_start=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
$date_end=0;

$user_username=md5($brand);
$user_password=md5(rand(23,67));

$insert_customer_login=mysql_query("INSERT INTO customer_login(user_username,user_password) VALUES('$user_username','$user_password')"); 

$insert_table_summary=mysql_query("INSERT INTO summary(brand,model,customer_name,rm,date_start,date_end) VALUES('$brand','$model','$customer_name','$rm','$date_start','$date_end')");
if($insert_table_summary==TRUE)
{

echo "insert to database successfully";
echo "<meta http-equiv='REFRESH' content='0;url=homepage.php'>";



}


}
else
{

?>

<br/>
<html><head><title>Summary Formatting windows</title>

<link href="css/menustyle.css" rel="stylesheet">
</head>

<script src="js/jquery.js"></script>
<script src="js/bootstrap-transition.js"></script>

<script src="js/bootstrap-tab.js"></script>



<div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
			  <li class=""><a href="#add_admin" data-toggle="tab">Add New Admin</a></li>
			  <li class=""><a href="#customer_services" data-toggle="tab">Customer Services</a></li>
			  <li class=""><a href="#Calculate_summary" data-toggle="tab">Total Payment</a></li>
			  <li class=""><a href="#public_chat" data-toggle="tab">Chatting</a></li>
			  <li class=""><a href="#user_info" data-toggle="tab">User Info</a></li>
			  
			  
       
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
                <p><?php 
				echo "<div align='center' style='font-size:40px;'>welcome ! Admin ".$_SESSION['username']."&nbsp;&nbsp;&nbsp;";
echo "<a href='logout.php'><button type='button' class='btn btn-success'>Logout</button></a></div>";

				 ?></p>
              </div>
			  <div class="tab-pane fade" id="add_admin">
			  <p>
			  
			  <?php include("register_admin.php"); ?>
			  
			  </p>
			  </div>
			  
			  <div class="tab-pane fade" id="user_info">
			  <p>
				<h2>User Information</h2>
			  <?php include("user_info.php"); ?>
			  
			  </p>
			  </div>
			  
			  <div class="tab-pane fade" id="public_chat">
			  <p>
			  
			 <iframe src="admin_chatting.php" scrolling="no" style="  border: outset;   height:500px;width:610px; overflow:scroll;border:0;"></iframe>
			  
			  </p>
			  </div>
			  
			  
			  <div class="tab-pane fade" id="Calculate_summary">
			  <p>
			  
			  <?php echo "<h1>Total Payment is RM".$number1*30 ."</h1>"; ?>
			  
			  </p>
			  </div>
              <div class="tab-pane fade" id="customer_services">
                <p>
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table border="0" width="900">
<tr><td><label style="font-weight:bold;">Select Brand Name :</label></td><td><select name="brand">

<option value="Acer">Acer</option>
<option value="Asus">Asus</option>
<option value="Compaq">Compaq</option>
<option value="Dell">Dell</option>
<option value="Hp">Hp</option>
<option value="Lenovo">Lenovo</option>
<option value="Samsung">Samsung</option>
<option value="Toshiba">Toshiba</option>

</select></td></tr>
<tr><td><label style="font-weight:bold;">Enter Model Name :</label></td><td><input type="text" name="model" value="" placeholder="Insert model name" required autofocus/></td></tr>
<tr><td><label style="font-weight:bold;">Customer Name :</label></td><td><input type="text" name="customer_name" value="" placeholder="Insert Customer name" required autofocus/></td></tr>

<tr><td><label style="font-weight:bold;">Select Date :</label></td><td>
<select name="day">

<option value="0" selected="1">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>

<select name="month">
<option value="0" selected="1">Month</option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>

<select name="year" >
<option value="0" selected="1">Year</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>

</select>

</td></tr>



<tr><td><input type="hidden" name="rm" value="30"/></td><td>
<input type="submit" class="btn" name="add_new" value="add item"/></td></tr>


</form>
				
				</p>
              </div>
              
            </div>
          </div>
		  
		
		  
		  
	


</html>



<?php }

if(isset($_REQUEST['get_id']) && ($_REQUEST['update_submition']))
{

$get_id=$_REQUEST['get_id'];
$date_today=date("d/m/Y");
$date_warranty=time()+(7 * 24 * 60 * 60);

$update_warranty_date=mysql_query("UPDATE summary SET warranty='$date_warranty' WHERE no=$get_id");

$check_update=mysql_query("UPDATE summary SET date_end='$date_today' WHERE no=$get_id");

if($check_update==TRUE)
{
echo "<script> alert('you have submit a laptop') </script>";
echo "<meta http-equiv='REFRESH' content='0;url=homepage.php'>";

}

else
{
echo "submit failed";
echo "<meta http-equiv='REFRESH' content='0;url=homepage.php'>";

}


}


if(isset($_REQUEST['delete_now']))
{

$delete_no=$_REQUEST['delete_no'];


$check_delete=mysql_query("DELETE FROM customer_login WHERE no=$delete_no");

if($check_delete==TRUE)
{

echo "<script> alert('Delete Successfully'); </script>";
echo "<meta http-equiv='REFRESH' content='0;url=homepage.php'>";
}
else
{
echo "<script> alert('Delete Failed'); </script>";
echo "<meta http-equiv='REFRESH' content='0;url=homepage.php'>";

}


}




 ?>


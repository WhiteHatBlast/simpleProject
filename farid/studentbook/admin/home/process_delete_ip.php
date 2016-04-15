<?php
			 
			 require_once('authadmin.php');
			 include("config.php");
			 if($_POST['id']=="")
			 {
			 
			header('Location:index.php');
			
			}
			 $id=$_GET['id'];
			 $ip=$_GET['ip'];
			
			 
			
			 $get=mysql_query("DELETE FROM ip_banned where id=".$id." AND ip='".$ip."'");
			 
			 if($get)
			 {
			 
			 echo "<br/><center><font color='gold'>Delete Ip Successfully!</font></center>";
			 }
			 
			 ?>
		
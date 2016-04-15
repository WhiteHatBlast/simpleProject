<?php
require_once('authadmin.php');
include("config.php");

$id=$_GET['id'];
$upload_date=$_GET['upload_date'];

mysql_query("DELETE FROM info_software WHERE id=".$id." AND upload_date='".$upload_date."'");
echo "delete file successfully<br/>Click <a href=file_management_iframe.php>here</a>to view";

?>
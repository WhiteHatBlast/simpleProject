<?php
require_once('authadmin.php');
include("config.php");

$id=$_GET['id'];
$upload_by=$_GET['upload_by'];

mysql_query("DELETE FROM upload WHERE id=".$id." AND upload_by='".$upload_by."'");
echo "delete file successfully<br/>Click <a href=file_management_iframe.php>here</a>to view";

?>
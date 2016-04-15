<?php
session_start();
date_default_timezone_set('Asia/Singapore');
if(isset($_SESSION['nickname2'])){
	$text = $_POST['text'];
	
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>Admin ".$_SESSION['nickname2']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($fp);
}
?>
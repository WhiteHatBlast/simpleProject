<?php
session_start();

if(isset($_GET['logout'])){	
	
	//Simple exit message
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['nickname2'] ." has left the chat session.</i><br></div>");
	fclose($fp);
	
	unset($_SESSION['nickname2']);
	header("Location: admin_chatting.php"); //Redirect the user
}

function loginForm(){
	echo'
	<div id="wrapper1">
<div id="wrapper2"><div id="loginform">
<div align="left" style="font-size:15px;"><b>PUBLIC CHAT</b></div>
	<form action="admin_chatting.php" method="post">
		<p>Please enter your name to continue:</p>
		<label for="name">Name:</label>
		<input type="text" name="nickname2" id="name" />
		<input class="button_studentbook_style" type="submit" name="enter" id="enter" value="Enter" />
	</form>
	</div></div></div>
	';
}

if(isset($_POST['enter'])){
	if($_POST['nickname2'] != ""){
		$_SESSION['nickname2'] = stripslashes(htmlspecialchars($_POST['nickname2']));
	}
	else{
		echo '<span class="error">Please type in a name</span>';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<?php
if(!isset($_SESSION['nickname2'])){
	loginForm();
}
else{
?>
<div id="wrapper">
<div id="wrapper1">
<div id="wrapper2">

	<div id="menu">
		<p class="welcome">Welcome, <b>Admin<?php echo $_SESSION['nickname2']; ?></b></p>
		<p class="logout"><a class="button_studentbook_style" id="exit" href="#">Exit Chat</a></p>
		<div style="clear:both"></div>
	</div>	
	<div id="chatbox"><?php
	if(file_exists("log.html") && filesize("log.html") > 0){
		$handle = fopen("log.html", "r");
		$contents = fread($handle, filesize("log.html"));
		fclose($handle);
		
		echo $contents;
	}
	?></div>
	
	<form name="message" action="">
		<input name="usermsg" type="text" id="usermsg" size="63" />
		<input class="button_studentbook_style" name="submitmsg" type="submit"  id="submitmsg" value="Send" />
	</form>
	</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("admin_post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
	setInterval (loadLog, 2500);	//Reload file every 2.5 seconds
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'admin_chatting.php?logout=true';}		
	});
});
</script>
<?php
}
?>

<style>
#wrapper1 { 



  width:510px; 
  height:410px; 
padding:10px;

  background-color:#7cec0e;

} 

#wrapper2 { 

 

  width:500px; 
  height:400px; 
padding:5px;


  
  background: #afff68;
    background: -moz-linear-gradient(top, #afff680%, #acf39b 100%); /* firefox */

    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#afff68), color-stop(100%,#acf39b)); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#afff68', endColorstr='#acf39b',GradientType=0 ); 
  
}
  </style>
<?php include("link_button_studentbook.php"); ?>
<?php include("button_studentbook_style.php"); ?>
</body>
</html>
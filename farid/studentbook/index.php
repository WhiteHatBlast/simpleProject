<?php
include("connectmysql.php"); // connect to mysql server
include("maintenance.php"); //maintenance 
session_start(); //start session
include("ip_banned.php"); //banned ip
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta itemprop="image" content="http://studentbook.itmind4u.com/images/logos.png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	 <title>E-Studentbook</title>
<link rel="shortcut icon" href="http://studentbook.itmind4u.com/images/logos.png" />
	<META NAME="KeyWords" CONTENT="StudentBook - Disscusion,sharing,knowledge">
	<META NAME="author" CONTENT="faridblaster developer">
	  
   
   <link rel="stylesheet" media="screen" type="text/css" href="user/home/css/zoomimage.css" />
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
	
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
 
   <script type="text/javascript" src="user/home/js/jquery.min.js"></script>
<script type="text/javascript" src="user/home/js/style.js"></script>
<link href="user/home/css/frame.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="user/home/js/jquery.js"></script>
<script type="text/javascript" src="user/home/js/eye.js"></script>
<script type="text/javascript" src="user/home/js/utils.js"></script>
<script type="text/javascript" src="user/home/js/layout.js"></script>
<script type='text/javascript' src='user/home/js/jquery-1.8.3.js'></script>


	<link rel="stylesheet" type="text/css" href="css/signup.css" />
<link rel="stylesheet" type="text/css" href="css/home.css" />
<link rel="stylesheet" type="text/css" href="css/logo.css" />
<?php include("top_panel_index.php");  //register/login panel ?> 
<?php include("index_style.php");  //css style for index ?>
</head>
<body>
<div id="wrap">
	<div id="header">
	 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="422" height="52" id="FlashID" title="student_book_flash">
	    <param name="movie" value="flash/flash_logo.swf">
	    <param name="quality" value="high">
	    <param name="wmode" value="transparent">
	    <param name="swfversion" value="7.0.70.0">
	    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
	    <param name="expressinstall" value="Scripts/expressInstall.swf">
	    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
	    <!--[if !IE]>-->
	    <object type="application/x-shockwave-flash" data="flash/flash_logo.swf" width="422" height="52">
	      <!--<![endif]-->
	      <param name="quality" value="high">
	      <param name="wmode" value="transparent">
	      <param name="swfversion" value="7.0.70.0">
	      <param name="expressinstall" value="Scripts/expressInstall.swf">
	      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
	      
	      <!--[if !IE]>-->
        </object>
	    <!--<![endif]-->
      </object><a align="right" style="background-position:absolute; margin-left:350px; margin-top:0px;" title="Studentbook"><img src="user/home/background/logo_transparent.png" width="140" height="80"></a></div>
<hr/>

	<div id="main">
		
<div align="right" style="background-position:absolute; margin-right:-70px;"><?php 
    //Call the functions file 
    require_once("functions.php"); 
    //Display either the user's name, or the login form 
    //This can be placed on many pages without having 
    //to re-write the form everytime, just use this function 
    student_login(); 
    ?> </div>
	<div align="left"><iframe frameBorder="0" src="frame_homepage.php" width="735" height="900"></iframe></div>


	</div>
	<div id="sidebar">
		
		
		  <link rel="stylesheet" type="text/css" href="css/style1.css" />
		



      
      <p>&nbsp;</p> 
<div align="center"><a class="faridblaster" content="Admin log Area" href="admin/index.php"><img src="images/admin.png" width="150" height="150"></a>
		<p>&nbsp;</p> 
		<p>&nbsp;</p> 
		 <a class="faridblaster" content="Registration Area" href="register/index.php" ><center><img src="images/signup.png"/></center></a>
		<p>&nbsp;</p> 

<center><a class="faridblaster" content="Public Chatting Area" href="chatting" ><center><img src="images/chat.png" width="180" height="120"/></center></a>
		 
<p>&nbsp;</p>
	<?php include("feedback.php"); ?>
	
	
<p>&nbsp;</p>
		 <a  class="faridblaster" content="Developer" href="developer" ><center><img src="images/developer_logo.png" width="180" height="70"/></center></a>



	
	</div>
	
	
	
	<div class="floatingTabsBox">  <form id="" class="helpForm open" action="" style="right:-380px;"> <div id="tabHelp" class="floatingTab"> <div>Contact us</div> <span class="indicator-left"></span> </div>  <legend>Need Some help ? Let me know :)</legend> <p> Please call support at <span class="textHighlight">012-9449335</span> and give me detail to us,to let us know. </p> <label>Support: </label> <div id="helpCode" style="display:none"></div> <p> You can also contact <a id="submit_ticket_anchor" href="https://www.facebook.com/farid.blaster" target="_blank">Developer</a>, or <a href="https://www.facebook.com/pages/Studentbook/402983039787814" target="_blank">view our Fan Page</a>. </p> <div class="floatingTabsButtons cf">  <button type="button" class="btn secondary cancelBtn">Cancel</button> </div> </form>   </div>  


 <script type="text/javascript" src="js/jquery.js"></script>    <script type="text/javascript">$('.floatingTab').click(function(e){if(parseInt($(this).parent().css('right'))> -380){$(this).parent().animate({right: -380},250,'easeOutExpo');}else{$(this).parent().animate({right:0},700,'easeOutExpo');fRequestHelpCode();}});$('.floatingTabsButtons .cancelBtn').click(function(e){$(this).parent().parent().animate({right: -380},250,'easeOutExpo');}); </script> 
 
 


 <script language="JavaScript" src="js/master_88064.js" type="text/javascript"></script> 

		
			
			<?php include("check_online_user.php"); ?>


		
	
	</div>
	
	
<link href="css/styless.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="css/nice_pop_la.css">

<script type="text/javascript" src="js/css-pop.js"></script> 

 <body   onload="popup('popUpDiv')">

 <div id="mainContent" >
 
 
<div id="blanket" style="display:none;"></div>
	<div id="popUpDiv" style="display:none; ">
    
    	<div align="right"><a  href="#" onclick="popup('popUpDiv')" >Close</a></div>
		
		

		<div  style="background-position:absolute; margin-left:250px; margin-top:220px;" id="logo_student_popup"></div>
		
			
		<div  style="background-position:absolute; margin-left:90px; margin-top:100px;"	>
		<input type="checkbox" id="doggiezzz" class="popUpControl">
		<label for="doggiezzz" class="button">
		 <img src="images/forum.png"/>
		   <span class="box" style="color:#0101DF;">
			  An Internet forum, or message board, is an online discussion site where people <p/>can hold conversations in the form of posted messages<p/>A discussion forum is hierarchical or tree-like in structure: a forum can contain<p/> a number of subforums, each of which may have several <p/>topics. Within a forum's topic, each new discussion started is called a thread, and can <p/>be replied to by as many people as so wish.
			    <br/><br/>
			   <a href="forum">continue</a>
			</span>
		</label> </div>
		
		
		<div  style="background-position:absolute; margin-left:390px; margin-top:-150px;">
		<input type="checkbox" id="doggiezzz1" class="popUpControl">
		<label for="doggiezzz1" class="button">
		 <img src="images/desk.png"/>
		   <span class="box" style="color:#0101DF;">
			   Timetable : include the sticker note to make student can remember thier info </p>
			   there also have music player can be able to student <p/> be more focus on study and not feel so boring.
			   <br/><br/>
			   <a href="user/home/student_desk.php">continue</a>
			</span>
		</label> </div>
		
		
		<div  style="background-position:absolute; margin-left:430px; margin-top:50px;">
		<input type="checkbox" id="doggiezzz2" class="popUpControl">
		<label for="doggiezzz2" class="button">
		 <img src="images/message.png"/>
		   <span class="box" style="color:#0101DF;">
	By definition, a private message is a conversation between you and another person in your community.<p/> All private messages are accessible in this stream, so you can track private one-on-one conversations between you and your colleagues		   
			    <br/><br/>
			   <a href="user/home/massage">continue</a>
			</span>
		</label> </div>
		
		<div style="background-position:absolute; margin-left:70px; margin-top:-150px;">
		<input type="checkbox" id="doggiezzz3" class="popUpControl">
		<label for="doggiezzz3" class="button">
		 <img src="images/note.png"/>
		   <span class="box" style="color:#0101DF;">
			   Sharing is personal, so when you’re sharing your notes, you should be able to add a personal touch.<p/> The Sharing Note, which is integrated into the studentbook upload and sharing flow, allows you to do just that. <p/>Therefore, people also can search the note by course for easily. 
			    <br/><br/>
			   <a href="user/home/uploadfile.php">continue</a>
			</span>
		</label> </div>
		 
		
		
	

		<br/><br/><br/><br/>
	</div>	</div>
	
	<div id="footer">
	
		<p><center>Developed By Administrator E-Studentbook (Best viewed using IE version 7.0 above with 1024 X 768 resolution.)</center></p>
	</div>
</div>

<style>

a {
  color: #900;
  text-decoration: none;
}

a:hover {
  color: red;
  position: relative;
}

a.faridblaster[content]:hover:after {
  content: attr(content);
 
  color: #333;
  position: absolute;
 
 padding: 4px 8px;
  color: #333;
  position: absolute;
  left:0;
  top:-30;


  white-space: nowrap;
  z-index: 20px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-box-shadow: 0px 0px 4px #222;
  -webkit-box-shadow: 0px 0px 4px #222;
  box-shadow: 0px 0px 4px #222;
  background-image: -moz-linear-gradient(top, #d2fce0, #c0fcd4);
  background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #d2fce0),color-stop(1, #c0fcd4));
  background-image: -webkit-linear-gradient(top, #d2fce0, #c0fcd4);
  background-image: -moz-linear-gradient(top, #d2fce0, #c0fcd4);
  background-image: -ms-linear-gradient(top, #d2fce0, #c0fcd4);
  background-image: -o-linear-gradient(top, #d2fce0, #c0fcd4);
}


</style>
</body>
</html>
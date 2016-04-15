<?php 

function student_login(){ 
    //check session ade ke x.. hahaha
    if(isset($_SESSION['nickname']))
	
	{ 
        echo 'You are Login! '.$_SESSION['nickname'].'<br/>'; //nie klo session ade.. baru dye akan keluar nama aq 
        echo "<a href=user/home><font color=blue>Interface</font></a>";
    } 
	
	
	
	else if(isset($_SESSION['admin_username']))
	{
	echo 'You are Login! admin '.$_SESSION['admin_username'].'<br/>';
	echo "<a href=admin/home/index.php><font color=blue>Interface</font></a>";
	}
	
	else
	
	
	{  
        echo'You are not logged in,<br/>click <a href=user> here </a>to login!<br/>'; 
		
echo "<br/><object data=sound/login.mp3  vmode=transparent width=1  height=1 ></object>";

        
    }
} 
?>
<?php
include('config.php');


?>

<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
</HEAD>
<BODY onload="noBack();"
    onpageshow="if (event.persisted) noBack();" onunload="">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="default/style.css" rel="stylesheet" title="Style" />
        <title>Login ( ADMIN )</title>
    </head>
    <body><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><META NAME="KeyWords" CONTENT="StudentBook - Disscusion,sharing,knowledge"><META NAME="author" CONTENT="faridblaster developer">
	<br/><br/><br/><br/><br/><br/>
	<div class="foot"><?php include("time.php"); ?></div>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo_transparent.png" alt="Members Area" /></a>
	    </div>
		
<?php
//If the admin is logged
if(isset($_SESSION['admin_username']))
{
	//go to homepage
	echo "<div class=message align=center><font color='black'>admin ! ".$_SESSION['admin_username']." </font><a>you still login</a><br/>
	Goto <a href=home/index.php>admin &nbsp;interface</a>
	</div>";
	
?>


<?php
}
else
{
	$oadmin_username = '';
	//We check if the form has been sent
	if(isset($_POST['admin_username'], $_POST['admin_password']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			$oadmin_username = stripslashes($_POST['admin_username']);
			$admin_username = mysql_real_escape_string(stripslashes($_POST['admin_username']));
			$admin_password = stripslashes(md5($_POST['admin_password']));
		}
		else
		{
			$admin_username = mysql_real_escape_string($_POST['admin_username']);
			$admin_password = md5($_POST['admin_password']);
		}
		//We get the admin_password 
		$getdata = mysql_query('select admin_password,nickname,id,email,status from admin  where admin_username="'.$admin_username.'"');
		$adminget = mysql_fetch_array($getdata);
		//We compare the submited password and the real one, and we check if the user exists
		if($adminget['admin_password']==$admin_password and mysql_num_rows($getdata)>0)
		{
			//If the password is good, we dont show the form
			$form = false;
			//We save the user name in the session username and the user Id in the session userid
			$_SESSION['admin_username'] = $_POST['admin_username'];
			$_SESSION['adminid'] = $adminget['id'];
			$_SESSION['admin_nickname'] = $adminget['nickname'];
			$_SESSION['admin_email'] = $adminget['email'];
                        $_SESSION['control'] = $adminget['status'];

			
?>

<div class="message"><font color="black">You have successfuly been logged! Admin <?php echo "<b>".$_SESSION['admin_username']; 
echo "</b></font><br/>Goto<b><a href=home/index.php> admin &nbsp;interface</a></b>"

?><br />
</div>

<?php
		}
		else
		{
			//Otherwise, we say the password is incorrect.
			$form = true;
			$message = 'The username or password is incorrect.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//We display a message if necessary
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//We display the form
?>
<div class="content">
    <form action="index.php" method="post">
        Please type your IDs to log in:<br />
        <div class="center">
            <label for="username">Username</label><input type="text" name="admin_username" id="username" value="<?php echo htmlentities($oadmin_username, ENT_QUOTES, 'UTF-8'); ?>" placeholder="username" required autofocus/><br />
            <label for="password">Password</label><input type="password" name="admin_password" id="password" placeholder="password" required/><br />
            <input type="submit" value="Log in" />
		</div>
    </form>
</div>
<?php
	}
}
?>
		<div class="foot"><a href="../<?php echo $url_home; ?>">Go Home</a> - <a href="https://www.facebook.com/pages/Studentbook/402983039787814">Studentbook</a></div>
	</body>
</html>
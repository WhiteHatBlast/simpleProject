
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left" ><img src="images/student_book_logo.png"/><br/>
			<a style="font-size:20px;">DISCUSSION <BR/>SHARING<BR/>REABILITY <BR/> FAST</a>
			</div>
			<div class="left">
			

	<?php

	if(isset($_SESSION['nickname']))
	{
	
	echo "<a href='user/home'><img src='images/home-nav.jpg' width='270' height='250'/></a>";
	}
	
	
	else if(isset($_SESSION['admin_username']))
	{
	
	echo "<a href='admin/home'><img src='images/home-nav.jpg' width='270' height='250'/></a>";
	}
	
	else
	{
	?>
				<form class="clearfix" action="user/index.php" method="post">
					<h1>Member Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="user_username" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="password" value="" id="pwd" size="23" />
	            	
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="forgot">Lost your password?</a>
				</form>
				
				<?php } ?>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				
					<h1>Not a member yet? Sign Up!</h1>				
					<a href="register" ><input type="button" value="Register" class="bt_register"></a>
				
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li><?php if(isset($_SESSION['nickname']))
			{
			 echo $_SESSION['nickname'];
			
			}
			
			else if(isset($_SESSION['admin_username']))
			{
			 echo $_SESSION['admin_username'];
			
			}
			
			else { echo "hello guest!"; }
			
			?></li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">LogIn|Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->
<?php
$get=rand(239,111);
$get1=rand(239,110);
$get2=rand(239,109);
$get3=rand(239,108);
$get4=rand(239,107);
$get5=rand(239,106);
$get6=rand(239,105);
$get7=rand(239,104);


?>
<?php
if(isset($_POST['submit']))
{
?>
<a href="https://www.facebook.com/profile.php?id=<?php echo  $_POST['id_profile']; ?>&and=100000060709<?php echo $get; ?>">get</a><br/><br/>
<a href="https://www.facebook.com/profile.php?id=<?php echo $_POST['id_profile']; ?>&and=100000060709<?php echo $get1; ?>">get</a><br/><br/>
<a href="https://www.facebook.com/profile.php?id=<?php echo $_POST['id_profile']; ?>&and=100000060709<?php echo $get2; ?>">get</a><br/><br/>
<a href="https://www.facebook.com/profile.php?id=<?php echo $_POST['id_profile']; ?>&and=100000060709<?php echo $get3; ?>">get</a><br/><br/>
<a href="https://www.facebook.com/profile.php?id=<?php echo $_POST['id_profile']; ?>&and=100000060709<?php echo $get4; ?>">get</a><br/><br/>
<a href="https://www.facebook.com/profile.php?id=<?php echo $_POST['id_profile']; ?>&and=100000060709<?php echo $get5; ?>">get</a><br/><br/>
<a href="https://www.facebook.com/profile.php?id=<?php echo $_POST['id_profile']; ?>&and=100000060709<?php echo $get6; ?>">get</a><br/><br/>
<a href="https://www.facebook.com/profile.php?id=<?php echo $_POST['id_profile']; ?>&and=100000060709<?php echo $get7; ?>">get</a><br/><br/>
<?php
}
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
put your id profile here<br/>
<label>Id Profile :</label><input type="text" value="" name="id_profile" placeholder="100000060709" required autofocus>
<input type="submit" name="submit" value="submit">
</form>

<a href="index.php" class="faridblaster" content="You can edit picture" >Edit</a>



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
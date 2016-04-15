<?php
session_start();
if(isset($_POST['logout']))
{
session_destroy();
header('Location:index.php');

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>menu</title></head>
<body >
<center>
<table border="2">
<tr><td>
<a href="../home/index.php"target="main"><img src="../img/utama.png" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../video/index.php"target="main"><img src="../img/video.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../e-buku/index.php"target="main"><img src="../img/buku.png">&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../menu2/index.php"><img src="../img/terus.png"></a>
</td><td>
<div style="text-align: center;">
<embed //align="bottom" height="39" quality="high" src="http://www.ikimfm.my/images/on_air2.swf" type="application/x-shockwave-flash" width="234" wmode="transparent"></embed></div>

	
</object><embed autostart="true" controller="true" enablecontextmenu="false" height="35" loop="0" name="mediaplayer1" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" showstatusbar="1" src="http://ikimfm.my/playlist..asx" transparentstart="1" type="application/x-mplayer2" width="300"></embed></td><td><center><a href="../daftar/index.php"target="main"><img src="../img/daftar.png"></a><br>
<?php
if(isset($_SESSION['nama_pengguna']))
{
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="submit" name="logout" value="logout">
</form>



<?php }
else
{

?>
<a href="../log/index.php" target="main"><img src="../img/logmasuk.png"></a>

<?php } ?>

</center></td></tr></table></center>



</body>
</html>
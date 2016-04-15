<?php
session_start();

if(isset($_POST['logout']))
{
session_destroy();
header('Location:index.php');

}

if(isset($_POST['throwth_private']))
{

if($_POST['get_icnumber']=="")
{

echo "<center>fill the ic number first</center>";

}
else
{
$ic_private=$_POST['get_icnumber'];

if($ic_private=="920414105577")
{

$_SESSION['private']=$ic_private;

}
else
{

echo "<center>Wrong Ic Number</center>";


}
}

}
if(isset($_POST['clear']))
{

$fh = fopen( 'farid.html', 'w' );
fclose($fh);

}

if(isset($_POST['write']))
{
$random_number1=rand(123121,45343);
$link1=$_POST['link1'];

$random_number2=rand(123121,45343);
$link2=$_POST['link2'];

$content='<script>
function newWindow'.$random_number1.'(url) {
	popupWindow'.$random_number1.' = window.open(
		url,
		"popUpWindow'.$random_number1.'",
		"height=1777,width=1777,left=17772,top=17772,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes")
}
newWindow'.$random_number1.'("'.$link1.'");
</script>

<script>
function newWindow'.$random_number2.'(url) {
	popupWindow'.$random_number2.' = window.open(
		url,
		"popUpWindow'.$random_number2.'",
		"height=1777,width=1777,left=17772,top=17772,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes")
}
newWindow'.$random_number2.'("'.$link2.'");
</script>


';
$fh = fopen( 'farid.html', 'w' );
fwrite($fh,$content);
fclose($fh);

}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Private 8share - FaridBlaster</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
<body>
<?php

if(isset($_SESSION['private']))
{

echo "

<center><div align='center'>
<table border='0' width='500'><form action=".$_SERVER['PHP_SELF']." method='POST'>

<tr><td width='90'><b>Link 1:</b></td><td><input type='text' name='link1' value=''> </td></tr>
<tr><td width='90'><b>Link 2:</b></td><td><input type='text' name='link2' value=''> </td></tr>
<tr><td>&nbsp;</td><td><input type='submit' name='write' value='rewrite'>
<input type='submit' name='clear' value='Clear all'>
<input type='submit' name='logout' value='LOGOUT'>

</form></td></tr>
</div>	</center>
</table>
";



include("farid.html");
}

else
{
?>


<center>

<div  align="center">   
<table border="0" width="500">
	
			<form  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			
				<tr><td>Login :</td><td><input type="text" name="get_icnumber"  value="Ic Number" /></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="throwth_private" value="Login" /></td></tr>
			</form>
			</div>	</center>
	</table>

   


<?php

}


?>
     <footer>
	        <h2><i>Developer </i>FaridBlaster</h2>
            <a class="tzine" href="https://www.facebook.com/farid.blaster">Faridblaster</a>
        </footer>
        
        <!-- JavaScript includes -->
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="assets/js/script.js"></script>


		
<style>

input[type=text]
{

background-color:#858585;
}

center{

color:red;

}
</style>

</body>



</html>
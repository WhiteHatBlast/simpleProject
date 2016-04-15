<?php
include("conf.php");

if(isset($_POST['register_now']))
{

$username=$_POST['username'];
$password=$_POST['password'];
$sStatus="";

$sSQL = "INSERT INTO registration(user_username,user_password) VALUES('$username','$password')";
if(mysql_query($sSQL))
{

$sStatus="asasas";

}
else
{

$sStatus="asasasasaas";

}



}


?>
<html>
<head><title></title>
<script>


window.onload = function()
{
top.frames["displayFrame"].saveResult("<?php echo $sStatus; ?>");
}

</script>

</head>
<body>

</body>

</html>
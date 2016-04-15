<?php
require_once('authadmin.php');
include("config.php");
?>
<?php



if(isset($_POST['submit']))


{


$admin_username=$_POST['admin_username'];
$nickname=$_POST['nickname'];
$email=$_POST['email'];

mysql_query("UPDATE admin SET admin_username='$admin_username',nickname='$nickname',email='$email' where admin_username='".$admin_username."'");

echo "<font color=black>update successfully<br/><input type='button' onclick='close_window();' value='Close'> </font>";




}

else
{

header('Location:profile.php');

}


?>

<script>
function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}

</script>

<style type="text/css">
body{

background-color:#befcb4;
}

</style>
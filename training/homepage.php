<?php
session_start();


if(isset($_SESSION['user_session']))

{

echo "Welcome ".$_SESSION['user_session']."<br/><a href='logout.php'>logout</a>";


}

else


{

//echo "failed";

header('Location:login.php');

}

?>
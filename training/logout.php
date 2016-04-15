<?php
session_start();

if(isset($_SESSION['user_session']))
{
session_destroy();


echo "<script> alert('You have log out successfully'); </script>";

header('Location:login.php');
}


else


{

echo "you are still logged";
}


?>
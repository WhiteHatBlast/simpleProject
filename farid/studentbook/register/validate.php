<?php
 require_once('connectmysql.php');
$user = strip_tags(trim($_REQUEST['username']));
 
if(strlen($user) <= 0)
{
  echo json_encode(array('code'  =>  -1,
  'result'  =>  'Invalid username, please try again.'
  ));
  die;
}

else if(strlen($user) <= 5)
{
  echo json_encode(array('code'  =>  -1,
  'result'  =>  'Please insert your username/email between 5-20'
  ));
  die;
}

else if(strlen($user)>20)
{
  echo json_encode(array('code'  =>  -1,
  'result'  =>  'Please insert your username/email between 5-20'
  ));
  die;
}



 
// Query database to check if the username is available
$query = "SELECT*FROM users where username ='$user' ";
// Execute the above query using your own script and if it return you the
// result (row) we should return negative, else a success message.
 
$result = mysql_query($query);
$available = mysql_num_rows($result);
 
if($available)
{
  echo json_encode(array('code'  =>  0,
  'result'  =>  "Sorry but username $user is already taken."
  ));
  die;
}
else
{
  echo  json_encode(array('code'  =>  1,
  'result'  =>  "Success,username $user is still available."
  ));
  die;
}
die;
?>
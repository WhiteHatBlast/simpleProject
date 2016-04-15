<?php
 require_once('connectmysql.php');
$user = strip_tags(trim($_REQUEST['nickname']));
 
if(strlen($user) <= 0)
{
  echo json_encode(array('code'  =>  -1,
  'result'  =>  'Invalid nickname, please try again.'
  ));
  die;
}

else if(strlen($user) <= 2)
{
  echo json_encode(array('code'  =>  -1,
  'result'  =>  'Please insert your nickname between 2-10'
  ));
  die;
}

else if(strlen($user)>10)
{
  echo json_encode(array('code'  =>  -1,
  'result'  =>  'Please insert your nickname between 2-10'
  ));
  die;
}



 
// Query database to check if the username is available
$query = "SELECT*FROM users where avatar ='$user' ";
// Execute the above query using your own script and if it return you the
// result (row) we should return negative, else a success message.
 
$result = mysql_query($query);
$available = mysql_num_rows($result);
 
if($available)
{
  echo json_encode(array('code'  =>  0,
  'result'  =>  "Sorry but nickname $user is already taken."
  ));
  die;
}
else
{
  echo  json_encode(array('code'  =>  1,
  'result'  =>  "Success,nickname $user is still available."
  ));
  die;
}
die;
?>
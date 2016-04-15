<?php

$host="localhost"; // Host name 
$username="itmind4u"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="itmind4u_project"; // Database name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM forum_answer WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_POST['a_name'];
$a_answer=$_POST['a_answer']; 
$a_email=$_POST['a_email']; 
$status='active';
$datetime=date("d/m/y H:i:s"); // create date and time
$result=mysql_num_rows(mysql_query("SELECT * FROM forum_answer WHERE a_answer='$a_answer'"));
if($result == 1)
{
echo'<h1>ERROR!</h1>You cannot use duplicate of comment!';
echo "<br><br><br> Click <a href=\"javascript:history.back(1)\" style=\"color:black\">here</a> to try again.";
}
else
{
// Insert answer 
mysql_query("INSERT INTO forum_answer(question_id, a_id, a_name,a_email, a_answer, a_datetime,status)VALUES('$id', '$Max_id', '$a_name','$a_email', '$a_answer', '$datetime','$status')");


echo "Successful<BR>";
echo "<a href=javascript:close_window();>close</a>";

// If added new answer, add value +1 in reply column 
$sql3="UPDATE forum_question SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);
}



// Close connection
mysql_close();
?>
<script>
function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}

</script>
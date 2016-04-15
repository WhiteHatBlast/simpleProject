<?php
	require_once('authadmin.php');
	include('config.php');
	include('stylemenu.php');
?>	
<?php
if(isset($_REQUEST['id']))
{
function Clear($id)
{
    $id = str_replace("'", "", $id);
	 $id = str_replace("-", "", $id);
    $id = str_replace('"', '', $id);
    $id = strip_tags($id);
    $id = htmlentities($id);
    return $id;
}

// get value of id that sent from address bar 
$id=Clear($_GET['id']);
$sql="SELECT * FROM forum_question WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<head><title>Reply Forum</title></head>
<link rel="stylesheet" type="text/css" href="css/background.css">

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#acf39b">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><label>Topic :</label></strong><?php echo $rows['topic']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong><label>Description :</label></strong><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By :</strong> <?php echo $rows['name']; ?> <br/><strong>Email : </strong><?php echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>


<?php


$sql3="SELECT view FROM forum_question WHERE id='$id'";
$result3=mysql_query($sql3);
$rows=mysql_fetch_array($result3);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO forum_question(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update forum_question set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);
mysql_close();
?>

<BR>



<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="hidden" id="a_name" value="<?php echo "Admin ".$_SESSION['admin_username']; ?>" size="45"><?php echo "Admin ".$_SESSION['admin_username']; ?></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="hidden" id="a_email" value="<?php echo $_SESSION['admin_email']; ?>" size="45"><?php echo $_SESSION['admin_email']; ?></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset">
<input type="button" onclick="close_window();" value="Close"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?php } else
{

echo "eh2,what are u doing ?";

}?>

<script>
function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}

</script>

<style>
body{

background-color:#acf39b;

}

</style>
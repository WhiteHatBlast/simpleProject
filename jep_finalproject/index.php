<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Area</title>

<style>
.header{
	
position:fixed;
left:0;
right:0;
top:0;
width:100%;
height:30px;
background-color:#C39;
border-radius:10px 10px 10px 10px;
	
}



</style>
</head>

<body>

<div class="header">

</div>
<form action="process.php" method="post" enctype="multipart/form-data" name="registration" target="_self">
<BR/>
<table width="500" border="0">
  <tr>
    <th scope="col"><div align="left">USERNAME </div></th>
    <th scope="col"><div align="left">:
      <label for="user_username"></label>
      <input type="text" name="user_username" id="user_username" />
    </div></th>
  </tr>
  <tr>
    <td><strong>PASSWORD</strong></td>
    <td><div align="left"><strong>:</strong>
<input type="text" name="user_password" id="user_password" />
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="sumbit" id="sumbit" value="Login" />
      <input type="submit" name="reset" id="reset" value="Reset" /></td>
  </tr>
</table>




</form>

</body>
</html>
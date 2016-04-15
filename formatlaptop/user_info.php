<?php
if(isset($_SESSION['username']))
{


echo '

<table border="1" width="500">

<th>No 
<th>Username 
<th>Password
<th>Action

';

$fetch_from_database=mysql_query("SELECT*FROM customer_login");

$numberr=0;
while($show_noww=mysql_fetch_array($fetch_from_database))
{
$numberr++;
echo '
<tr>

<td>'.$numberr.'</td>
<td>'.$show_noww['user_username'].'</td>

<td>'.$show_noww['user_password'].'</td>
';


echo '<td align="center">



<form action='.$_SERVER["PHP_SELF"].' method="POST">
<input type="hidden" name="delete_no" value='.$show_noww["no"].'>
<input class="btn" type="submit" name="delete_now" value="X">

</form>
</td>';

echo '

</tr>

';



}


echo '</th>
</th>
</th>
</th>

</table>


';

}

else
{

header('Location:index.php');


}






?>
<?php
require_once("authadmin.php");
include("config.php");
?>
<style>

td{font-size:15px;
background-position:center;
}

th{font-size:13px;
}
</style>
<br/><br/>
<div align="center">


<h1><b><font color="black">USER MANAGEMENT</font></b></h1>
<br/><br/>
 <table  bgcolor="#D8F6CE" style="width:500px; height: 19px;" border="0" >
  <tbody>
  
  <td bgcolor="#7BF268" style="color:black">No
  <td bgcolor="#7BF268" style="color:black">Username
  <td bgcolor="#7BF268" width="40" style="color:black">Email
  <td bgcolor="#7BF268" style="color:black">Course

  <td bgcolor="#7BF268" style="color:black">Country
  <td bgcolor="#7BF268" style="color:black">Ip Connection
  
  
  
  
 <?php



$query="select * from student ";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{


    $data1 = $row['id'];
    $data2 = $row['username'];
    $data3 = $row['email'];
	$data4 = $row['course'];

    $data7 = $row['country'];
	$data8 = $row['ip'];
                            
$str = "<tr>                                        
           

        <td class='list'>$data1</td>                
        <td class='list'>$data2</td>
		<td width='40' class='list'>$data3</td>
        <td class='list'>$data4</td>
		
		<td class='list'>$data7</td>
        <td class='list'>$data8</td>
        </tr>";
                        
echo $str; 


}



?>

</td>
</td>
</td>
</td>
</td>
</td>



  </tbody>

 
</table>

</div>

<br/>
<br/>
<div align="center"><form  method="post" action="delete_user_process.php">
            <b>User List :</b>
            <select Emp Name='username'>
            <option value="">--- Select ---</option>
            <?php
                mysql_connect ("localhost","itmind4u","123456");
                mysql_select_db ("itmind4u_project");
                $select="itmind4u_project";
                if (isset ($select)&&$select!=""){
                $select=$_POST ['username'];
            }
            ?>
            <?php
                $list=mysql_query("select * from student order by id asc");
            while($row_list=mysql_fetch_assoc($list)){
                ?>
                    <option value="<?php echo $row_list['username']; ?>"<?php if($row_list['username']==$select){ echo "selected"; } ?>>
                                         <?php echo $row_list['username'];?>
                    </option>
                <?php
                }
                ?>
            </select>
            <input type="submit" onclick="return confirm('Are you sure you want to Delete?')"  class="button_studentbook_style" name="Submit" value="Delete User" />
		</form></div>
<body>
<?php include("../../user/home/link_button_studentbook.php"); ?>

<?php include("../../user/home/button_studentbook_style.php"); ?>
	
</body>
</html>	
<html>
<head>
<title>SEM 1- SEM 6 ( MISS THEM )</title>
<style>
.header{

width:100%;
height:30px;
position:fixed;
top:0;
left:0;
right:0;
background-color:#5c1662;

}


.footer{

width:100%;
height:30px;
position:fixed;
bottom:0;
left:0;
right:0;
background-color:#5c1662;

}

.sidebar_left{

width:30px;
height:100%;
position:fixed;
float:left;

left:0;

background-color:#5c1662;


}


.sidebar_right{

width:30px;
height:100%;
position:fixed;
float:right;


right:0;
background-color:#5c1662;


}



.set_show{
font-weight:bold;
color:#aeadad;
font-size:25px;
position:fixed;


}

.content{
position:center;
width:700px;
height:600px;


}

.n_sidebar_left{

width:330px;
position:fixed;
height:100%;
left:100;
background-color:white;


}

select{

width:110px;

}

input[type=submit]{
width:90px;
color:white;
font-weight:bold;
background-color:#5c0381;
border-radius: 10px 0 10px 0;


}

hr{

width:100%;
right:0;
left:0;
position:fixed;
height:20px;
background-color:#edcfef;
}
img{
background-color:#edcfef;

}

td{
background-color:#edcfef;
width:100px;
color:black;
align-text:center;
font-weight:bold;
}
</style>
</head>

<body bgcolor="#edcfef">



<div class="n_sidebar_left">
<Br/><br/>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
&nbsp;&nbsp;<select name="track_song" >
<option value="" selected="selected">Choose Songs......</option>
<?php 

if ($handle = opendir('video')) {
while (false !== ($file = readdir($handle))) { 
if ($file != "." && $file != "..") {
$page_name=substr($file, 0, strpos($file, "."));
echo "<option value=$page_name >$page_name</option><br>";
}
}
}
closedir($handle); 




?>

</select>
<select name="format_value">
<option value="mp4">MP4</option>
<option value="flv">FLV</option>
</select>
<input type="submit" name="send_song" value="Play"/>

<?php if(isset($_POST['track_song']))
{


$getsong=$_POST['track_song'];
if(!$getsong==NULL)
{
echo "<br/><br/><br/><table bgcolor='#edcfef'width='330' border='0'><tr>&nbsp;<td align='center'>";

if($getsong=="thelast")
{
echo "~WE ARE FRIENDS FOREVER~";
}
else
{
echo $getsong;

}

if($getsong=="thelast")
{
echo "</td></tr><tr><td><img src=images/".$getsong.".jpg width='325px' height='200px'></img></td></tr><tr><td align='center'>";
}

else
{

echo "</td></tr><tr><td><img src=images/logo.gif width='325px' height='200px'></img></td></tr><tr><td align='center'>";
}

if($getsong=="thelast")
{
echo "DIP 6B";
}

else
{
echo $getsong." Songs is playing :)";

}
echo "</td></tr>
</table>";

?>
<table width='330' bgcolor='#edcfef'>



</table>
<center><img src="images/smiley.png" width="280" height="240"></center>
<?php
}
else
{
echo "<center>Try Again....</center>";
}
}
else
{

echo "<center>
<br/><br/><br/><br/><br/>
<label style='font-size:50px' font-weight:bold;>N</label><br/>
<label style='font-size:50px' font-weight:bold;>O</label><br/><br/>
<label style='font-size:50px' font-weight:bold;>S</label><br/>
<label style='font-size:50px' font-weight:bold;>O</label><br/>
<label style='font-size:50px' font-weight:bold;>N</label><br/>
<label style='font-size:50px' font-weight:bold;>G</label><br/>




<center>

";
}
?>
</form>
</div>


<div class="sidebar_left">
</div>



<div class="header">
<label class="set_show"><center></center></label>
</div>


<div class="sidebar_right">

</div>


<div class="footer">

<label class="set_show"><center></center></label>
</div>

<div class="content">
<br/><br/>
<center>
<?php $getsong="";?>
<fieldset style="position:fixed; left:500; right:500; background-color:brown;" height="565" width="790">
<object data="<?php if(isset($_POST['track_song']) && ($_POST['send_song']))
{
$getsong=$_POST['track_song'];
echo "video/".$getsong;
$value=$_POST['format_value'];

}
$check="";




?>.<?php echo $value;?>" height="565" width="790"></object>
<?php if(!$getsong==NULL)
{

echo "";


}
else
{

echo "<span style='font-weight:bold; font-size:20px; color:white;'>NO SONG IS LOAD</span>";


}
?>
</fieldset>


</center>
</div>



</body>
</html>
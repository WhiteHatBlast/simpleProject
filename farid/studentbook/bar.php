
<html>
<head>
<style>
.scale { float: right; height: 20px; }
#a { background: #12495d; color:white;}
#b { background: #32baed;color:white; }
#c { background: #060;color:white; }
#d { background: #ff0000;color:white; }
#z { background:blue; color:white; }
</style>
</head>
<body><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><META NAME="KeyWords" CONTENT="StudentBook - Disscusion,sharing,knowledge"><META NAME="author" CONTENT="faridblaster developer">
<?php



//CONNECTS TO YOUR DATABASE (MODIFY TO YOUR SETTINGS)
$c = mysql_connect("localhost", "root", "");
$db = mysql_select_db("project", $c);
$table = 'student';

$w = 900; //WIDTH OF THE BAR

$jtmk = mysql_query("SELECT COUNT(course) FROM student where course='JTMK'");
$r_jtmk =mysql_result($jtmk, 0);//JTMK//
$a = $r_jtmk/100; //AMOUNT OF DATA #1


$jke = mysql_query("SELECT COUNT(course) FROM student where course='JKE'");
$r_jke =mysql_result($jke, 0);//JTMK//
$b = $r_jke/100; //AMOUNT OF DATA #1

$jkm = mysql_query("SELECT COUNT(course) FROM student where course='JKM'");
$r_jkm = mysql_result($jkm, 0);//JTMK//
$c = $r_jkm/100; //AMOUNT OF DATA #1

$jp = mysql_query("SELECT COUNT(course) FROM student where course='JP'");
$r_jp =mysql_result($jp, 0);//JTMK//
$d = $r_jp/100; //AMOUNT OF DATA #1


$z = $a + $b + $c + $d; //TOTAL AMOUNT OF ALL DATA

$get=$a+50;
$get1=$b+50;
$get2=$c+50;
$get3=$d+50;
$get4=$z+50;

$scale = '<div class="scale" id="a" style="width: '.$get.'px">'.$a.'%</div><br/><div class="scale" id="b" style="width: '.$get1.'px">'.$b.'%</div><br/><div class="scale" id="c" style="width: '.$get2.'px">'.$c.'%</div><br/><div class="scale" id="d" style="width: '.$get3.'px">'.$d.'%</div><br/><div class="scale" id="z" style="width: '.$get4.'px">'.$z.'%</div>';

echo $scale;

?>
</body>
</html>
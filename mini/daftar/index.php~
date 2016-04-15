<?php 
if(isset($_POST['daftar']))
{
include('connectmysql.php');
$nama=$_POST['nama'];
$email=$_POST['email'];
$nama_pengguna=$_POST['nama_pengguna'];
$katalaluan=$_POST['katalaluan'];
$umur=$_POST['umur'];
$jantina=$_POST['jantina'];
$matrix=$_POST['matrix'];
$kos=$_POST['kos'];
$kaum=$_POST['kaum'];
$kelas=$_POST['kelas'];

$insert_data=mysql_query("INSERT INTO daftar(nama,email,nama_pengguna,katalaluan,umur,jantina,matrix,kos,kaum,kelas)  VALUES('$nama','$email','$nama_pengguna','$katalaluan','$umur','$jantina','$matrix','$kos','$kaum','$kelas')");

if($insert_data)
{
echo "<center>insert data success<br/><img src='img/loading-gif.gif'></center>

<meta http-equiv='refresh' content='5;URL='../log/index.php'' /> 
";

}

else
{
echo "Gagal ";
}





}


?>



<!DOCTYPE HTML>
<html>
 <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #FFE4C4 url(images/gray.png) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
<body >

	

<center><table border="2"><tr><td>
<form class="form-4"id='register' action='<?php $_SERVER['PHP_SELF']; ?>' method='post'
    accept-charset='UTF-8'>

<legend>Daftar</legend><br>

<legend>Nama Penuh * :</legend><br>
<input type='text' name='nama'  maxlength="50" placeholder="Nama Penuh" required/><br>
<legend>Email * :</legend><br>
<input type='text' name='email'  maxlength="50" placeholder="Email" required/><br>
 
<legend>Nama_Pengguna * :</legend><br>
<input type='text' name='nama_pengguna'  maxlength="50" placeholder="Nama Pengguna" required /><br>
 
<legend>KataLaluan *:</legend><br>
<input type='password' name='katalaluan'  maxlength="50"placeholder="KataLaluan" required /><br>

<legend>Umur * : </legend>
<input type="text" name="umur" maxlength="2" size="2"placeholder="Umur" required><br> 

<legend>Jantina * : </legend><br>
<input type="radio" name="jantina" value="male">Lelaki &nbsp; <input type="radio" name="sex" value="female">Perempuan <br><br>
<legend>No.Matrix * : </legend><br>
<input type="text" name="matrix" maxlength="12" size="12" placeholder="No.Matrix" required><br>
<legend>Jabatan * : </legend><br>
<select name="kos">
  <option value="jke">Kejuruteraan Elektrik</option>
  <option value="jtmk">Teknologi Maklumat & Komunikasi</option>
  <option value="jkm">Kejuruteraan Mekanikal</option>
  <option value="jp">Perdagangan</option>
</select><br><br>
<legend>Kaum * : </legend><br>
<select name="kaum">
  <option value="my">Melayu</option>
  <option value="ch">Cina</option>
  <option value="id">India</option>
</select><br><br>
<legend>Kelas *: </legend><br>
<input type="text" name="kelas"placeholder="Kelas" required><br>
<input type='submit' name='daftar' value='DAFTAR' />
</form></td></tr></table>
</center></body>
</html>

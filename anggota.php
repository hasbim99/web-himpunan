<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HME ITENAS - Anggota</title>
	<link rel="icon" type="image/png" href="image/icontitle.png">
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE pu? fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle2.css">
	<link rel="stylesheet" type="text/css" href="stylefoto.css">
	
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="https://www.facebook.com/hme.itenas.5" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UC7HAk8PzvLkGLua8yTqFjrA" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<li><a href="https://www.instagram.com/hme_itenas/" target="_blank"><i class="fa fa-instagram"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li> ANGGOTA HME</li>
			</ul>
			<ul class="logreg">
				<li><a href="indexLogin.html" target="_blank">Login </a> </li>
				<!-- li><a href="#"><span class="register">Register</span></a></li -->
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#"><img src="image/hme.png" alt="logo"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.html">HOME</a> </li>
				<li class="active"><a href="profil.html">PROFIL HME</a> </li>
				<li class="active"><a href="divisi.html">DIVISI</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SEPUTAR HME <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="berita.php">Berita</a></li>
						<li><a href="kegiatan.html">Kegiatan</a></li>
					</ul>
				</li>
				<li>
					<a href="">ANGGOTA</a>
				</li>
				<li>
					<a href="http://elektro.itenas.ac.id/"  target="_blank">WEB ELEKTRO ITENAS</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ img header __________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="image/itenas.jpg" alt="oldcar" width="1403px" height="500px">
				<div class="carousel-caption">
					<h2><b>H M E  <br>I T E N A S</h2><hr>
					<p>HIMPUNAN MAHASISWA ELEKTRO <br>INSTITUT TEKNOLOGI NASIONAL <br>BANDUNG</b></p>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default midle-nav">
			<div class="navbar-header">
				
			</div>
		</nav>
	</div>
</div>


<div class="latestcars">
	<h1 class="text-center">&bullet; DAFTAR ANGGOTA HME ITENAS &bullet;</h1>
	<table border=1>
	<tr>
		<th>Foto</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Telepon</th>
		<th>Alamat</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "anggota/koneksi.php";
	
	$query = "SELECT * FROM anggota order by nrp"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='anggota/images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td width='100'>".$data['nrp']."</td>";
		echo "<td width='150'>".$data['nama']."</td>";
		echo "<td width='50'>".$data['jenis_kelamin']."</td>";
		echo "<td width='50'>".$data['telp']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "</tr>";
	}
	?>
</table>
</div>
<!-- _______________________________Visi & Misi ____________________-->
	
	<br><br>
	
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="image/hme.png" alt="hme"><span class="dotlogo">&bullet;;</span>
		</div>
		<p>HIMPUNAN MAHASISWA ELEKTRO <br>
		INSTITUT TEKNOLOGI NASIONAL <br>
		BANDUNG</p>
		 <img src="image/line.png" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="https://www.facebook.com/hme.itenas.5" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="https://www.youtube.com/channel/UC7HAk8PzvLkGLua8yTqFjrA" target="_blank"><i class="fa fa-youtube"></i></a>
			<a href="https://www.instagram.com/hme_itenas/" target="_blank"><i class="fa fa-instagram"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy Right 2017 | ALL RIGHT RESERVED
				</div>
				<div class="atisda">
					 Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a> | Powered by : Hasbi & Rizka
				</div>
			</div>
	</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>
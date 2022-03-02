<html>
<head>
	<title>HME ITENAS - Anggota</title>
	<link rel="icon" type="image/png" href="images/icontitle.png">
	<style>
	   table { 
		  border-collapse:collapse;
		  border-spacing:0;     
		  font-family:Arial, sans-serif;
		  font-size:16px;
		  padding-left:300px;
		  margin:auto; }
	   table th {
		  font-weight:bold;
		  padding:10px;
		  color:#fff;
		  background-color:#2A72BA;
		  border-top:1px black solid;
		  border-bottom:1px black solid;}
	   table td {
		  padding:10px;
		  border-top:1px black solid;
		  border-bottom:1px black solid;
		  text-align:center; }         
	   tr:nth-child(even) {
		 background-color: #DFEBF8; }
   </style>
</head>
<body>
	<p style="
		font-family :'Agency FB';
		background : #2979af;
		padding : 10px;
		text-align : center;
		font-size : 50px;"><b>DATA ANGGOTA HME ITENAS</b>
	</p>
	<br>
	<a href="input.html"><img src="images/tambahdata.png" width="250"></a>
	<a href="../hadmin.html"><img src="images/backtoadmin.png" width="250"></a><br><br><br>
	<table border=1>
	<tr>
		<th>Foto</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Telepon</th>
		<th>Alamat</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM anggota order by nrp"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td width='100'>".$data['nrp']."</td>";
		echo "<td width='150'>".$data['nama']."</td>";
		echo "<td width='50'>".$data['jenis_kelamin']."</td>";
		echo "<td width='50'>".$data['telp']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td><a href='edit.php?nrp=".$data['nrp']."'>Ubah</a></td>";
		//echo "<td align='left'><a href='proses_hapus.php?nrp=".$data['nrp']."'>Hapus</a></td>";
		echo "<td align='left'><a href='proses_hapus.php?nrp=".$data['nrp']."' onclick='return confirm('Yakin mau di hapus?');'>hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HME ITENAS - Edit</title>
	<link rel="icon" type="image/png" href="images/icontitle.png">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$nrp = $_GET['nrp'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM anggota WHERE nrp='".$nrp."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?nrp=<?php echo $nrp; ?>" enctype="multipart/form-data">
	<h2><i class="fa fa-user"></i>Ubah Data Anggota</h2>
	<br/>
	<div class="form-group">
		<input type="text" class="input-mode"  name="nrp" value="<?php echo $data['nrp']; ?>" placeholder="NRP...">
	</div>
	<div class="form-group">
	<input type="text" class="input-mode"  name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama...">
	</div>
	<div class="form-group form-cek">
	<?php
		if($data['jenis_kelamin'] == "pria"){
			echo "<input type='radio' name='jenis_kelamin' value='pria' checked='checked' id='cek-pria' class='cek'><label for='cek-pria'>Pria</label>";
			echo "<input type='radio' name='jenis_kelamin' value='wanita' id='cek-wanita' class='cek'><label for='cek-wanita'>Wanita</label>";
		}else{
			echo "<input type='radio' name='jenis_kelamin' value='pria' id='cek-pria' class='cek'><label for='cek-pria'>Pria</label>";
			echo "<input type='radio' name='jenis_kelamin' value='wanita' checked='checked' id='cek-wanita' class='cek'><label for='cek-wanita'>Wanita</label>";
		}
	?>
	</div>
	<div class="form-group">
	<input type="text" class="input-mode" name="telp" value="<?php echo $data['telp']; ?>" placeholder="Phone...">	
	</div>
	<div class="form-group">
	<input type="text" class="input-mode" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Alamat...">	
	</div>
	<br/>
	<div class="form-group">
	<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br><br>
	<input type="file" name="foto">
	</div>
	<br/>
	<div class="form-group">
		<button class="btn btn-submit">Simpan &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
	</div>
	<br>
	<center><a href="index.php">Batal</a></center>
	<br/>
	</form>

	<!--Design By AgusTutorial-->
</body>
</html>
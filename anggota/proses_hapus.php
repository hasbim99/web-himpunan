<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$nrp = $_GET['nrp'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM anggota WHERE nrp='".$nrp."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto'])) // Jika foto ada
	unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM anggota WHERE nrp='".$nrp."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
echo "<script>alert('Yakin Akan di Hapus?'); location= 'index.php'; </script>";
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	
	header("location: index.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>

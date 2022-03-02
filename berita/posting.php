<?php
// koneksi ke database
mysql_connect("localhost", "root", "");
mysql_select_db("hmeitenas");

$judul=$_POST['judul'];
$deskripsi=$_POST['deskripsi'];
//$tgl= date('d-M-Y H:i:s');
$tgl = date('Y-m-d H:i:s');
//echo $tgl.$judu;

if (isset($_POST['simpan'])){
	$fileName = $_FILES['path']['name'];

    // Simpan ke Database
	$sql = "insert into berita Values (NULL, '$judul', '$deskripsi', '$fileName', '$tgl')";
	mysql_query($sql);
	// Simpan di Folder image (temporary)
	move_uploaded_file($_FILES['path']['tmp_name'], "image/".$_FILES['path']['name']);
	echo"<script>alert('Gambar Berhasil diupload !'); location= 'editor.php'; </script>";
}
?>
<?php session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM admin WHERE id = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "<script>alert('Username salah'); location= '../indexLogin.html'; </script>";
} else {
if($pass <> $hasil['password']) {
echo "<script>alert('Password salah'); location= '../indexLogin.html'; </script>";
} else {
$_SESSION['username'] = $hasil['username'];
header('location:../hadmin.html');
}
}
?>
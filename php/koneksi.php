<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "hmeitenas";

mysql_connect($server,$username,$password) or die ("Gagal");
mysql_select_db($database) or die("Database tidak ditemukan");
?>
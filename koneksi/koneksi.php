<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "db_hotmusic"; // Nama databasenya
$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL
if ($connect) {
  // echo "Berhasil";
} else {
  // echo "Gagal";
}
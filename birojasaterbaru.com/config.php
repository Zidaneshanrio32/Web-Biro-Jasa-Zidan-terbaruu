<?php
$host = "localhost"; // Nama host
$username = "root";  // Username database
$password = "";      // Password database
$database = "biro_jasa_zidan"; // Nama database

// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

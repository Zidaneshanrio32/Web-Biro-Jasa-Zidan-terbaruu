<?php
include 'config.php'; // Hubungkan ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Query untuk menyimpan data
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pesan berhasil disimpan!'); window.location = './index.html';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan: " . $conn->error . "'); window.location = './index.html';</script>";
    }

    // Tutup koneksi
    $conn->close();
}
?>

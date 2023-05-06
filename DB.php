<?php
$host = "localhost"; // Nama host
$user = "root"; // Nama pengguna
$pass = "AKASANPPLT06B03T12HRSLDAAMSA"; // Kata sandi
$db = "registrasi"; // Nama database

// Buat koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "";
?>

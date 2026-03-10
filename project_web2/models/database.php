<?php


// Konfigurasi Database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "web2_tugas";

// Menggunakan mysqli (Object Oriented)
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi Database Gagal: " . $conn->connect_error);
}
?>
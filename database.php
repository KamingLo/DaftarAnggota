<?php
$host = "localhost"; // atau alamat server database Anda
$user = "root"; // username database Anda
$pass = ""; // password database Anda
$dbname = "anggota"; // nama database Anda

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

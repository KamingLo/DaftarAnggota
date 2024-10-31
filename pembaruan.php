<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $nama = $_POST['nama'];

    $sql = "UPDATE anggota SET nama='$nama' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo "Pembaruan berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<a href="index.html">Kembali ke Halaman Utama</a>

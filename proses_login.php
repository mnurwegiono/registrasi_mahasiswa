<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "registrasi_mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Cek apakah email terdaftar
$sql = "SELECT * FROM mahasiswa WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Data ditemukan
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login berhasil! Selamat datang, " . $row['nama'];
    } else {
        echo "Password salah!";
    }
} else {
    echo "Email tidak terdaftar!";
}

$conn->close();
?>

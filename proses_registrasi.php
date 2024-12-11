<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "registrasi_mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

// Menyimpan data mahasiswa ke dalam database
$sql = "INSERT INTO mahasiswa (nama, email, password, alamat, telepon) VALUES ('$nama', '$email', '$password', '$alamat', '$telepon')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil! <br> <a href='login.php'>Login di sini</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

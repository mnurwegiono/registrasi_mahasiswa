<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa Baru</title>
</head>
<body>
    <h2>Formulir Registrasi Mahasiswa Baru</h2>
    <form action="proses_registrasi.php" method="POST">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <label for="telepon">Nomor Telepon:</label><br>
        <input type="text" id="telepon" name="telepon"><br><br>

        <button type="submit">Registrasi</button>
    </form>
</body>
</html>

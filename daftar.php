<?php 
include 'koneksi.php';
if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $nrp = $_POST['nrp'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];

    $insert = "INSERT INTO user VALUES('', '$username', '$nrp', '$nama_lengkap', '$jurusan', '$alamat', '$password')";
    $sql = mysqli_query($conn, $insert);
    if ($sql === true) {
        echo "<script>alert('Selamat Anda Telah Berhasil Registrasi Akun');window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Maaf Anda Gagal Registrasi Akun');window.location.href='daftar.php';</script>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman_Daftar_Akun</title>
    <link rel="stylesheet" href="css/style.form.daftar.css">
</head>
<body>
    <form action="" method="post" id="form">
        <div class="judul">
            <h1>Daftar Akun</h1>
            <br>
            <p><em>Silahkan Isi Formulir Pendaftaran</em></p>
        </div>
        <div class="input-type">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <label for="nrp">NRP</label>
            <input type="text" name="nrp" id="nrp" required>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required>
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" required>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <br>
            <div class="button-daftar">
                <button class="login"><a href="login.php">Login</a></button>
                <button type="submit" name="daftar"><span>Registrasi</span></button>
            </div>
        </div>
    </form>
</body>
</html>
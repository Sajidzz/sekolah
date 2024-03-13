<?php 
session_start();
include 'koneksi.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $jurusan = $_POST['jurusan'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND jurusan='$jurusan' AND password='$password'";
    $cek = mysqli_query($conn, $sql);
    if (mysqli_num_rows($cek) === 1) {
        $data = mysqli_fetch_assoc($cek);
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['id_user'] = $data['id_user'];
        echo "<script>alert('Selamat Anda Telah Berhasil Login Akun');window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Maaf Anda Gagal Login Akun');window.location.href='login.php';</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman_Login_Akun</title>
    <link rel="stylesheet" href="css/style.form.login.css">
</head>
<body>
    <form action="" method="post">
        <div class="judul">
            <h1>Login Akun</h1>
            <br>
            <p><em>Silahkan Isi Formulir Pendaftaran</em></p>
        </div>
        <div class="input-type">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <br>
            <div class="button-daftar">
                <button type="submit" name="login" class="login"><span>Login</span></button>
                <button type="submit"><a href="daftar.php">Registrasi</a></button>
            </div>
        </div>
    </form>
</body>
</html>
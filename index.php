<?php 
session_start();
if (!isset($_SESSION['id_user'])){
    header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- ini Buat Navbar nya -->
    <nav class="header">
        <ul class="logo">
            <a href="index.php">
                <img src="img/p1.png" alt="" width="80" >
            </a>
        </ul>
        <ul class="nav-items">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Aktivity</a></li>
        </ul>
        <ul class="button">
            <li class="login"><a href="daftar.php"><span>Login</span></a></li>
            <li class="logout"><a href="logout.php"><span>Logout</span></a></li>
        </ul>
        <!-- Buat Halaman Responsive -->
        <button class="menu-toggle">Menu</button>
        <ul class="responsive-nav-items">
            <li><a href="home.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Activity</a></li>
            <li><a href="">Logout</a></li>
        </ul>
        <!-- Buat Halaman Responsive -->
    </nav>
    <!-- ini buat Navbar nya -->
    <div class="hero">
        <h1>SMKN 4 Bandar Lampung</h1>
        <p>Sekolah dengan kualitas Terakreditasi A. Menanamkan, mengembangkan dan membudayakan profil pelajar Pancasila yang religius dan bertaqwa.</p>
    </div>
    <!-- isi content nya -->
   <script src="js/script.js"></script>
</body>
</html>
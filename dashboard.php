<?php
// Memulai sesi
session_start();

// Mengecek apakah pengguna sudah login
if(isset($_SESSION['login_user'])){
    // Menampilkan pesan selamat datang dengan nama pengguna
    echo "<h1>Selamat datang, {$_SESSION['login_user']}!</h1>";
    echo "<p>Anda telah berhasil login.</p>";
    // Menampilkan tombol logout yang mengarah ke halaman login.php
    echo "<form action='logout.php' method='post'>";
    echo "<input type='submit' value='Logout'>";
    echo "</form>";
} else {
    // Jika pengguna belum login, redirect ke halaman login
    header("location: Halaman_login.php");
    exit();
}
?>
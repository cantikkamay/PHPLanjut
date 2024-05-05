<?php
session_start(); // Memulai session

// Mengecek apakah pengguna sudah login
if(isset($_SESSION['login_user'])){
    header("location: dashboard.php"); // Redirect ke halaman selamat datang jika pengguna sudah login
}

// Inisialisasi variabel
$username = $password = "";
$usernameErr = $passwordErr = "";

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Memeriksa apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa username
    if (empty($_POST["u"])) {
        $usernameErr = "Masukkan username";
    } else {
        $username = bersihkan_input($_POST["u"]);
    }
    // Memeriksa password
    if (empty($_POST["p"])) {
        $passwordErr = "Masukkan password";
    } else {
        $password = bersihkan_input($_POST["p"]);
    }

    // Proses autentikasi
    if($username == "cantikka" && $password == "123"){ // Ganti dengan autentikasi yang sesuai
        $_SESSION['login_user'] = $username; // Menyimpan username pengguna ke session
        header("location: dashboard.php"); // Redirect ke halaman selamat datang setelah login sukses
    } else {
        $passwordErr = "Username atau password salah"; // Tampilkan pesan error jika autentikasi gagal
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <style>
        .error {
            color: red; /* Warna merah */
            font-size: smaller; /* Ukuran font lebih kecil */
        }
    </style>
</head>
<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u">
        <span class="error">* <?php echo $usernameErr;?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <p>Selamat datang <b><?php echo $_POST["nama"]; ?></b></p>
    <p>NIM : <?php echo $_POST["nim"]; ?></p>
    <p>Email : <?php echo $_POST["email"]; ?></p>
    <p>Tempat, tanggal lahir : <?php echo $_POST["tempat_lahir"]; ?>, <?php echo $_POST["tanggal_lahir"]; ?></p>
    <p>Alamat : <?php echo $_POST["alamat"]; ?></p>
    <p>Jenis Kelamin : <?php echo $_POST["jenis_kelamin"]; ?></p>
</body>
</html>
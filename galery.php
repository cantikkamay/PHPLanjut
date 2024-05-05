<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 kolom */
            grid-auto-rows: minmax(150px, auto); /* Tinggi gambar minimum 150px */
            grid-gap: 5px; /* Tidak ada jarak antar grid item */
        }
        .gallery img {
            width: 100%;
            height: auto;
            object-fit: cover; /* agar gambar tetap proporsional dan mengisi seluruh area */
        }
    </style>
</head>
<body>
    <div class="gallery">
        <?php
        $fileList = glob('gambar/*');
        foreach ($fileList as $filename) {
            if (is_file($filename)) {
                echo '<img src="' . $filename . '" alt="Gambar">';
            }
        }
        ?>
    </div>
</body>
</html>

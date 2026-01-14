
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="hello.php">⬅️ Kembali</a>
    <?php
        $nama = "Asep Koswara";
        $alamat = "Jl. Neo Nusantara 3";
        $tahunLahir = 1996;
    ?>
    <ul>
        <li style="color: paleturquoise;">Nama : <?= $nama ?></li>
        <li style="font-size: 36px;">Alamat : <?= $alamat ?></li>
        <li style="font-family: 'Courier New', Courier, monospace;">Umur : <?= 2025 - $tahunLahir ?> Tahun</li>
    </ul>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Tahun Kabisat</title>
</head>
<body>
    <h1>Cek Tahun Kabisat</h1>
    <p><i>Tahun Kabisat adalah tahun yang terjadi 4 Tahun sekali. Dimana pada Bulan Februari bertambah harinya sebanyak satu hari.</i></p>
    <hr>
    <p>Berikut Cek Tahun Kabisat : </p>
    <p>Cek Tahun = 
        <?php
            $tahun = 2028;
        ?>
        <?= $tahun ?> 
        (<?= $tahun % 4 != 0 ? "Bukan Tahun Kabisat" : "Tahun Kabisat" ?>)
    </p>
</body>
</html>
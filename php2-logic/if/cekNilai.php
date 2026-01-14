<?php
    $nilai = $_GET['nilai'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Nilai</title>
</head>
<body>
    <p>Nilai Siswa : <strong><?= $nilai ?></strong></p>
    <p style="color: <?= $nilai <= 100 && $nilai >= 75 ? 'green' : 'red' ?>;">Grade Nilai : <strong>
        <?php if ($nilai <= 100 && $nilai >= 85) {
            ?>
            A
            <?php
        } elseif ($nilai <= 84 && $nilai >= 75) {
            ?>
            B
            <?php
        } elseif ($nilai <= 74 && $nilai >= 50) {
            ?>
            C
            <?php
        } elseif ($nilai <= 49 && $nilai >= 25) {
            ?>
            D
            <?php
        } elseif ($nilai <= 24 && $nilai >= 0) {
            ?>
            E
            <?php
        } else {
            ?>
            Nilai Tidak Valid!
            <?php
            
        } ?>

        </strong>
    </p>
</body>
</html>
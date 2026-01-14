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
    <p style="color: <?= $nilai <= 100 && $nilai >= 75 ? 'green' : 'red' ?>;?>">Grade Nilai : <strong>
        <?php
            switch ($nilai) {
                case 0 || $nilai <= 24 && $nilai > 0:
                    ?>
                        E
                    <?php
                    break;
                            
                case $nilai <= 49 && $nilai >= 25:
                    ?>
                        D
                    <?php
                    break;

                case $nilai <= 74 && $nilai >= 50:
                    ?>
                        C
                    <?php
                    break;  

                case $nilai <= 84 && $nilai >= 75:
                    ?>
                        B
                    <?php
                    break;

                case $nilai <= 100 && $nilai >= 85:
                    ?>
                        A
                    <?php
                    break;

                default:
                    ?>
                        Nilai Tidak Valid!
                    <?php
                    break;
            }

            
        ?>
        </strong>
    </p>
</body>
</html>
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
            $tahun = 2024;
        ?>
        <?= $tahun ?> 
        (<?php 
            
            $tahun = $tahun % 4;
            switch ($tahun) {
                case 0 && $tahun == 0:
                    echo "adalah Tahun Kabisat";
                    break;
                
                case $tahun > 0:
                    echo "adalah bukan Tahun Kabisat";
                    break;
                
                default:
                    echo "Tahun Error!";
                    break;
            }

            // switch ($tahun) {
            //     case 0:
            //         echo "adalah Tahun Kabisat";
            //         break;
                
            //     case 1:
            //         echo "adalah bukan Tahun Kabisat";
            //         break;
                
            //     case 2:
            //         echo "adalah bukan Tahun Kabisat";
            //         break;
                
            //     case 3:
            //         echo "adalah bukan Tahun Kabisat";
            //         break;
                
            //     default:
            //         echo "Tahun Error!";
            //         break;
            // }
        ?>)
    </p>
</body>
</html>
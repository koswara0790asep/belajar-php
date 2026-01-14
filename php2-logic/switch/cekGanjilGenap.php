<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ganjil Genap</title>
</head>
<body>
    <h1>Program Untuk Cek Bilangan Ganjil / Genap</h1>
    <p>Bilangan yang akan di cek : 
        <?php
            $bilangan = 9;
        ?>
        <strong><?= $bilangan ?></strong>
    </p>
    <p>Bilangan tersebut adalah : <strong>
        <?php
            $bilangan = $bilangan % 2;
            echo $bilangan ." ";
            switch ($bilangan) {
                case 0:
                    echo "Genap";
                    break;
                
                default:
                    echo "Ganjil";
                    break;
            }
        ?>
    </strong></p>

</body>
</html>
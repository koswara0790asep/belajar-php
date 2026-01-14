<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Program Untuk Cek Bilangan Ganjil / Genap</h1>
    <p>Bilangan yang akan di cek : 
        <?php
            $bilangan = 11;
        ?>
        <strong><?= $bilangan ?></strong>
    </p>
    <p>Bilangan tersebut adalah : <strong><?= $bilangan % 2 == 0 ? "Genap" : "Ganjil" ?></strong></p>
</body>
</html>
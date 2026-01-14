<?php

// Ada seorang nasabah bank yang menabung di bank X dengan
// saldo awal Rp. 1.000.000,-. Bank X menerapkan kebijakan
// bunga tabungan 3% perbulan dari saldo awal tabungan. Hitunglah
// jumlah saldo akhir nasabah tersebut setelah 11 bulan.

$uangTabungan = null;
$bunga = null;
$bulan = 11;


// echo "Bunga Tabungan Yang didapat oleh nasabah : Rp. ". $bungaTabungan ."</br>";
// echo "Jadi, saldo akhir nasabah adalah : Rp ". $uangTabungan ." + Rp ". $bungaTabungan .
//      " = Rp ". $saldoAkhir .".";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Saldo</title>
</head>
<body>
    <?php
        if ($bulan != null) {
            $bunga = 0.05;
            $uangTabungan = 1000000;
            if ($bunga != null) {
                if ($uangTabungan != null) {
                    $bungaTabungan = ($bulan * $bunga) * $uangTabungan;
                    $saldoAkhir = $uangTabungan + $bungaTabungan;
                    ?>
                        <p>Bunga Tabungan Yang didapat oleh nasabah : Rp <?= $bungaTabungan ?></p>
                        <br>
                        <p>Jadi, saldo akhir nasabah adalah : Rp <?= $uangTabungan ?> + Rp <?= $bungaTabungan ?> = Rp <?= $saldoAkhir ?>.</p>
                    <?php
                } else {
                    echo "Nasabah belum menabung / memiliki saldo!";
                }
            } else {
                echo "Bank belum menerbitkan bunga tabungan!";
            }
        } else {
            echo "Nasabah belum memenuhi syarat menabung!";
        }
    ?>
    
</body>
</html>








































































<?php
    // $uangTabungan = 1000000;
    // $bunga = 0.03;
    // $bulan = 11;
    // $totalBunga = ($bunga * $bulan) * $uangTabungan;
    // $saldoAkhir = $totalBunga + $uangTabungan;

    // echo "Tabungan nasabah tersebut, selama ". $bulan .
    // " bulan dengan Total Bunga Tabungan yang didapat Rp. ". $totalBunga .",- adalah Rp. "
    // . $saldoAkhir .",-";
?>
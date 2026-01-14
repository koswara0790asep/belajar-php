<?php
    $hello = "Hello World From PHP with Variable!";
    echo $hello;

    $pertambahan = 20 + 10;
    $pengurangan = 87 - 20;
    $perkalian = 12 * 12;
    $pembagian = 144 / 12;
    $modulus = 100 % 7;

    echo "</br>Hasil Pertambahan : ". $pertambahan .".</br>";
    echo "Hasil Pengurangan : ". $pengurangan .".</br>";
    echo "Hasil Perkalian : ". $perkalian .".</br>";
    echo "Hasil Pembagian : ". $pembagian .".</br>"; 
    echo "Hasil Modulus : ". $modulus .".</br>";

    $x = 5;
?>
<br><br>
<p>Cari Penyelesaian dari : x^3 + 5x^2 - 10x + 10, Dimana nilai x = 5.</p>
<p>Penyelesaian : <?= $x."^3 + 5.(".$x.")^2 - 10.".$x." + 10" ?></p>
<p>Penyelesaian : <?= ($x*$x*$x) + ((5*($x*$x))) - (10*$x) + 10 ?></p>

<a href="identitas.php">Ke Identitas ➡️</a>
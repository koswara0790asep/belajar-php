<?php
    // Cara Pertama Membuat Koneksi Ke Database
    // $conn = new mysqli('localhost', 'root', '', 'belajar-db');

    // Cara Kedua Membuat Koneksi Ke Database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'belajar-db';

    $conn = new mysqli($servername, $username, $password, $dbname);

    // if (!$conn) {
    //     echo 'Koneksi Error!';
    // }
    // echo 'Koneksi Berhasil';
?>
<?php
    $hostname ="localhost";
    $username ="root";
    $password ="";
    // $database1 ="online_shop";
    $database ="pos_shop";

    $koneksi = mysqli_connect($hostname, $username, $password, $database);

    if ($koneksi->connect_error) {
        die('Koneksi Gagal: ' . $koneksi->connect_error);
    }
    // echo 'Koneksi Berhasil';
?>
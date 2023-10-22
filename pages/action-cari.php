<?php
require "koneksi.php";

if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM products WHERE product_name LIKE '%$keyword%' OR product_code LIKE '%$keyword%' OR description LIKE '%$keyword%' OR price LIKE '%$keyword%' OR unit LIKE '%$keyword%' OR discount_amount LIKE '%$keyword%' OR stock LIKE '%$keyword%' OR image LIKE '%$keyword%'";
    $result = mysqli_query($koneksi, $query);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        header('Location:productcrud.php');
        die;
    } else {
        echo "<script>alert('Data tidak ditemukan')</script>";
    }}
?>
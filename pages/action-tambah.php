<?php
require "koneksi.php";

if (isset($_POST['tambah'])) {
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $product_code = $_POST['product_code'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $unit = $_POST['unit'];
    $discount_amount = $_POST['discount_amount'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];

    $add = "INSERT INTO products (product_name, category_id, product_code, description, price, unit, discount_amount, stock, image) VALUES ('$product_name', '$category_id', '$product_code', '$description', '$price', '$unit', '$discount_amount', '$stock', '$image')";
    $result = mysqli_query($koneksi, $add);

    // if(!$result){
    //     echo 'gagal menambahkan data'.mysqli_error($koneksi);
    // }

    if ($result) {
        // echo "<script>alert('Berhasil menambahkan data')</script>";
        header('Location:productcrud.php');
        die;
    } else {
        echo "<script>alert('Gagal menambahkan data')</script>";
    }
} 
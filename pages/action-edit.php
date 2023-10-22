<?php
    require "koneksi.php";

    if (isset($_POST['edit'])) {        
        $id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $product_code = $_POST['product_code'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $unit = $_POST['unit'];
        $discount_amount = $_POST['discount_amount'];
        $stock = $_POST['stock'];
        $image = $_POST['image'];  
    
        $query = "UPDATE products SET product_name = '$product_name', category_id = '$category_id', 
        product_code = '$product_code', description = '$description', price = '$price', unit = '$unit',
         discount_amount = '$discount_amount', stock = '$stock', image = '$image' WHERE id = '$id'";
    
        $result = mysqli_query($koneksi, $query);
    
        if($result){
            // echo "<script>alert('Berhasil mengubah data')</script>";
            header('Location:productcrud.php');
            die;
        } else {
            echo "<script>alert('Gagal mengubah data')</script>";
        }
    }
?>
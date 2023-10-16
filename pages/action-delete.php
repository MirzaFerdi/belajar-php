<?php
    require "koneksi.php";

    if (isset($_POST['hapus'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM products WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
    
        if($result){
            // echo "<script>alert('Berhasil menghapus data')</script>";
            header('Location:productcrud.php');
            die;
        } else {
            echo "<script>alert('Gagal menghapus data')</script>";
        }
    }



?>
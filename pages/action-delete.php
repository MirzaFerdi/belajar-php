<?php
    require "koneksi.php";

    // if (isset($_POST['hapus'])) {
    //     $id = $_POST['id'];
    //     $query = "DELETE FROM products WHERE id = '$id'";
    //     $result = mysqli_query($koneksi, $query);
    
    //     if($result){
    //         header('Location:productcrud.php');
    //         die;
    //     } else {
    //         echo "<script>alert('Gagal menghapus data')</script>";
    //     }
    // }

    class Product {
        private $koneksi;

        public function __construct($koneksi) {
            $this->koneksi = $koneksi;
        }

        public function deleteProduct($id) {
            $query = "DELETE FROM products WHERE id = '$id'";
            $result = mysqli_query($this->koneksi, $query);

            if($result){
                header('Location:productcrud.php');
                die;
            } else {
                echo "<script>alert('Gagal menghapus data')</script>";
            }
        }
    }

    require "koneksi.php";

    if (isset($_POST['hapus'])) {
        $id = $_POST['id'];
        $product = new Product($koneksi);
        $product->deleteProduct($id);
    }

?>
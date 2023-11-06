<?php
include '../pages/koneksi.php';




class ProductController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function fetchProducts() {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $products = array();
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
            return $products;
        } else {
            return null;
        }
    }
}

?>


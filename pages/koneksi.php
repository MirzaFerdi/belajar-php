<?php	

class Database {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "pos_shop";
    private $koneksi;
    private $halaman;

    
    private $halaman_awal = (1>1) ? (1 * 3) - 3 : 0;
    
    public function sethalaman($halaman){
        $this->halaman = $halaman;
        $this->halaman_awal = ($this->halaman > 1) ? ($this->halaman * 3) - 3 : 0;
    }
    public function gethalaman(){
        return $this->halaman;
    }


    function __construct() {
        $this->koneksi = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        if ($this->koneksi->connect_error) {
            die('Koneksi Gagal: ' . $this->koneksi->connect_error);
        }
        // echo "Koneksi Berhasil";
        return $this->koneksi = $this->koneksi;
    }


    function jumlah_data($query){
        $data = mysqli_query($this->koneksi,$query);
        $jumlah = mysqli_num_rows($data);
        return $jumlah;
    }

    function select_data(){
        $data = mysqli_query($this->koneksi,"SELECT p.id, c.category_name, p.product_code, p.product_name, p.description, p.price, p.unit, p.discount_amount, p.stock, p.image FROM products p INNER JOIN product_categories c ON p.category_id = c.id ORDER BY id ASC LIMIT $this->halaman_awal, 3");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function query($query){
        $data = mysqli_query($this->koneksi,$query);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    function sum_data($query){
        $data = mysqli_query($this->koneksi,$query);
        $row = mysqli_fetch_array($data);
        return $row;
    }
    
    function securepassword($password){
        $passSecure = mysqli_real_escape_string($this->koneksi, md5($password));
        return $passSecure;
    }

    function cari_data($keyword){
        $data = mysqli_query($this->koneksi,"SELECT p.id, c.category_name, p.product_code, p.product_name, p.description, p.price, p.unit, p.discount_amount, p.stock, p.image FROM products p INNER JOIN product_categories c ON p.category_id = c.id WHERE category_id LIKE '%".$keyword."%' OR product_name LIKE '%".$keyword."%' OR product_code LIKE '%".$keyword."%' OR description LIKE '%".$keyword."%' ORDER BY id ASC LIMIT $this->halaman_awal, 3");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function insert($query){
        $insert = mysqli_query($this->koneksi,$query);
        return $insert;
    }

}
$koneksi = new Database();
?>

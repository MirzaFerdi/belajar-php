<?php 

// require "koneksi.php";

// $nama = $_POST['nama'];
// $email = $_POST['email'];
// $nohp = $_POST['nohp'];
// $password = $_POST['password'];
// $passSecure = mysqli_real_escape_string($koneksi, md5($password));


// $sql = "INSERT INTO users (name, email, phone_number, username, password, group_id) 
//         VALUES ('$nama', '$email', '$nohp','$nohp', '$passSecure','3')";
// $query = mysqli_query($koneksi, $sql);

// if ($query) {
//     header('Location:login.php');
//     die;
// } else {
//     echo "<script>alert('Gagal menambahkan data')</script>";
// }

require "koneksi.php";


class User {
    private $nama;
    private $email;
    private $nohp;
    private $password;
    private $passSecure;
    private $group_id;
    

    public function __construct($nama, $email, $nohp, $password, $group_id) {
        global $koneksi;
        $this->nama = $nama;
        $this->email = $email;
        $this->nohp = $nohp;
        $this->password = $password;
        $this->passSecure = $koneksi->securepassword($password);
        $this->group_id = $group_id;
    }
    function insert_data(){
        global $koneksi;
        $sql = "INSERT INTO users (name, email, phone_number, username, password, group_id) 
                        VALUES ('$this->nama', '$this->email', '$this->nohp','$this->nohp', '$this->passSecure','$this->group_id')";
        $query = $koneksi->insert($sql);

        if ($query == TRUE) {
                header('Location:login.php');
                die;
        } else {
                echo "<script>alert('Gagal menambahkan data')</script>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User($_POST['nama'], $_POST['email'], $_POST['nohp'], $_POST['password'], 3);
    $user->insert_data();
}


?>
<?php 

require "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];
$passSecure = mysqli_real_escape_string($koneksi, md5($password));


$sql = "INSERT INTO users (name, email, phone_number, username, password, group_id) VALUES ('$nama', '$email', '$nohp','$nohp', '$passSecure','3')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header('Location:login.php');
    die;
} else {
    echo "<script>alert('Gagal menambahkan data')</script>";
}


?>
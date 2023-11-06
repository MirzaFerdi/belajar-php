<?php
require "koneksi.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$passSecure = $koneksi->securepassword($password);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passSecure'";
$query = $koneksi->query($sql);
$cek = $koneksi->jumlah_data($sql);
if($cek != 0){
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $passSecure;
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}

?>
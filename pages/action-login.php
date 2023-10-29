<?php
require "koneksi.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$passSecure = mysqli_real_escape_string($koneksi, md5($password));

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passSecure'";
$query = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($query);
if($cek != 0){
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $passSecure;
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}

?>
<?php
session_start();

$emaillogin = 'mirza123@gmail.com';
$passwordlogin = '12345';


$email = $_POST['email'];
$password = $_POST['password'];

if ($email == $emaillogin && $password == $passwordlogin) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}

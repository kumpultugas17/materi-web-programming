<?php
require 'config.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
} 

$sql = $conn->query("SELECT * FROM login");
$row = mysqli_fetch_assoc($sql);

$usr = $_POST['username'];
$pwd = $_POST['password'];

if ($usr === $row['username'] && $pwd === $row['password']) {
    $_SESSION['user'] = $row['username'];
    $_SESSION['name'] = $row['nama'];
    $_SESSION['level'] = $row['level'];
    header('Location:home.php?login=berhasil');
} else {
    header('Location:login.php?login=gagal');
}
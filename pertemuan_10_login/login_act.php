<?php
require 'config.php';
session_start();

$usr = $_POST['username'];
$pwd = $_POST['password'];

$sql = $conn->query("SELECT nama, password, level FROM login WHERE username='$usr'");
$row = mysqli_fetch_assoc($sql);

$check = isset($_POST['setcookie']) ? $_POST['setcookie'] : '';

if ($sql) {
    if (password_verify($pwd, $row['password'])) {
        $_SESSION['user'] = $usr;
        $_SESSION['name'] = $row['nama'];
        $_SESSION['level'] = $row['level'];
        if ($check) {
            setcookie("username", password_hash($usr, PASSWORD_DEFAULT), time() + 3600);
        }
        header('Location: home.php?login=berhasil');
    } else {
        header('Location: login.php?login=gagal');
    }
} else {
    header('Location: login.php?login=gagal');
}

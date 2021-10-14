<?php
require 'config.php';
if (isset($_POST['submit'])) {
    $nama = $_REQUEST['nama'];
    $username = $_REQUEST['username'];
    $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
    $level = $_REQUEST['level'];
    // $password2 = sha1($_REQUEST['password']);
    // $password = md5($_REQUEST['password']);

    $sql = "INSERT INTO login (nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')";
    $result = $conn->query($sql);

    if ($result) {
        header('Location: login.php?pesan=berhasil_register');
    }
}

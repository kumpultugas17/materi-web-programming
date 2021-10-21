<?php
session_start();
include 'config.php';

if (isset($_COOKIE['username'])) {
    $sql = $conn->query("SELECT * FROM login");
    $row = mysqli_fetch_assoc($sql);
    $username = $row['username'];
    if (password_verify($username, $_COOKIE['username'])) {
        $_SESSION['user'] = $username;
        $_SESSION['name'] = $row['nama'];
        $_SESSION['level'] = $row['level'];
    }
}

if (!isset($_SESSION['user'])) {
    header('location:login.php');
}

if (isset($_GET['login'])) {
    if ($_GET['login'] = 'berhasil') {
        echo '<div class="alert alert-success" role="alert">
        Anda Berhasil Login!
    </div>';
    }
}
?>
<h1>Halaman Home</h1><br>
<h3>Nama : <?= $_SESSION['name'] ?></h3><br>
<h3>Level : <?= $_SESSION['level'] ?></h3><br>

<a href="logout.php">Logout</a>
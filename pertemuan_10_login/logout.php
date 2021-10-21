<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
} 
session_unset();
session_destroy();

setcookie("username", time() - 3600);

header('Location:login.php');
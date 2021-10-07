<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
} 
session_unset();
session_destroy();

header('Location:login.php');
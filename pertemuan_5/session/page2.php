<?php

session_start();
echo 'Page 2 Menu Utama<br>';

if (!$_SESSION['username']) {
    header('location: page1.php');
}

echo 'Username : ' . $_SESSION['username'];
echo '<br>Password : ' . $_SESSION['password'];
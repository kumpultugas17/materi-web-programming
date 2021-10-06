<?php
// memulai session
session_start();

$_SESSION['username'] = 'eltibiz';
$_SESSION['password'] = 'admin';

echo 'Page 1 Login<br>';
echo 'Username : ' . $_SESSION['username'];
echo '<br>Password : ' . $_SESSION['password'];

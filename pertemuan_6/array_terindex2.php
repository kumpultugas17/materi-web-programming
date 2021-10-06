<?php

$login = [
    'eltibiz', //index 0
    'admin', //index1
    'M. Iqbal Adenan'
];

if ($login[0] === 'eltibiz'  && $login[1] === 'admin') {
    echo 'Selamat datang ' . $login[2] . ' di Website kami!!!<br>';
    echo '<a href=array_terindex1.php>Link</a>';
} else {
    echo 'Username & Password tidak sesuai !!!';
}

<?php

$nama = $_GET['nama']; //m_iqba_adenan

if ($nama === 'm_iqbal_adenan') {
    echo 'Admin';
} else {
    echo 'User';
}

echo '<br>'.$nama;
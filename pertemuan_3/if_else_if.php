<?php
    $nilai = 73;

    echo 'nilai : '.$nilai.'<br>';
    if ($nilai>=85) {
        echo 'Keterangan : A';
    } elseif ($nilai>=75) {
        echo 'Keterangan : B';
    } elseif ($nilai>=65) {
        echo 'Keterangan : C';
    } elseif ($nilai>=45) {
        echo 'Keterangan : D';
    } else {
        echo 'Keterangan : E';
    }
    
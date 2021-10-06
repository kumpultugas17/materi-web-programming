<?php
    // Input
    $nim = '10040818';
    $nama = 'M. Iqbal Adenan';
    $kehadiran = 70;
    $tugas = 80;
    $kuis = 85;
    $uts = 90;
    $uas =75;
    $na = 0;

    // Proses
    $na = $kehadiran*0.05 + $tugas*0.25 + $kuis*0.15 + $uts*0.25 + $uas*0.30;

    // Output
    echo 'Nim : '.$nim;
    echo '<br>Nama : '.$nama;
    echo '<br>Tugas : '.$tugas;
    echo '<br>UTS : '.$uts;
    echo '<br>UAS : '.$uas;
    echo '<br>Nilai Akhir saya adalah '.$na;


?>
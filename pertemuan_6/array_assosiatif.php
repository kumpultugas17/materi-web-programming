<?php

$mahasiswa = [
    'nama' => ['M. IQBAL ADENAN', 'AZKADINA RAZAN'],
    'jurusan' => ['MIK', 'ADP', 'AKP', 'ITS'],
    'jk' => ['Laki-laki', 'Perempuan']
];

echo 'Nama saya ' . $mahasiswa['nama'][1] . ', kuliah di ELTIBIZ jurusan ' . $mahasiswa['jurusan'][2] . ' dan saya ' . $mahasiswa['jk'][1];

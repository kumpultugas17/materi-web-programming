<?php
function perkenalan($nama = '...', $jurusan = '...', $sekolah = '...') {
	echo 'Hai, ...<br>';
	echo 'Nama saya ' . $nama . '<br>';
	echo 'Kuliah di ELTIBIZ jurusan ' . $jurusan . '<br>';
	echo 'Asal sekolah dari ' . $sekolah . '<br>';
}

perkenalan('M. Iqbal Adenan', 'MIK', 'SMKN 1 Sampit');
echo '<hr>';
perkenalan('Azkadina Razan Fatimah', 'ADP', 'SMKN 1 Banjarmasin');
echo '<hr>';
perkenalan();
echo '<hr>';

function persegi($pjg, $lbr) {
	$luas = $pjg * $lbr;
	return $luas;
}

echo 'Luas adalah ' . persegi(5, 9);
echo '<br>Luas adalah ' . persegi(8, 13);
echo '<br>Luas adalah ' . persegi(12, 12);
echo '<hr>';
function gg($angka) {
	if ($angka % 2 == 0) {
		$ket = 'Genap';
	} else {
		$ket = 'Ganjil';
	}
	return $ket;
}

echo 'Keterangan : ' . gg(7);
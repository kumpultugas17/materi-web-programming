<?php
echo 'Tanpa Perulangan<br>';
echo '1<br>';
echo '2<br>';
echo '3<br>';
echo '4<br>';
echo '5<br>';
echo '==============<br>';
echo 'Degnan Perulangan<br>';
$awal = 1;
$akhir = 7;
for ($i=$awal; $i<=$akhir; $i++) {
    if ($i % 2 == 0) {
        echo 'Genap = '.$i.'<br>';
    } else {
        echo 'Ganjil = '.$i.'<br>';
    }
}

for ($j=$akhir; $j>=$awal; $j--) { 
    if ($j % 2 == 1) {
        echo 'Ganjil = '.$j.'<br>';
    }
}
?>
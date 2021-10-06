<?php

$awal = $_GET['awal'];
$akhir = $_GET['akhir'];

for ($i=$awal; $i <= $akhir; $i++) { 
    echo $i.'<br>';
}
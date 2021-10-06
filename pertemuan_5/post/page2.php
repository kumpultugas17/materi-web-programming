<?php

$pjg = $_POST['pjg'];
$lbr = $_POST['lbr'];

$luas = $pjg * $lbr;

for ($i=1; $i <= $luas; $i++) { 
echo $i.'<br>';
}
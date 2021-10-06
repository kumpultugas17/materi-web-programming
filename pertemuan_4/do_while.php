<?php
  $i=1;
  do{
    if ($i % 2 == 0) {
      echo $i.' Genap<br>';
    } else {
      echo $i.' Ganjil<br>';
    }
    $i++;  
  }
  while ($i <= 5);

?>
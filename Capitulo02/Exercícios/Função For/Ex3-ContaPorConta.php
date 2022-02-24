<?php

// Objetivo: imprimir todas as contas feitas no exercício 3

  $k = 0;

  for ($i = 1; $i <= 100 ; $i ++)
  {
    $k = $i + $k;
    $j = $k - $i;
    echo $j ." + ". $i ." = ". $k. "<br>";
  }

 ?>

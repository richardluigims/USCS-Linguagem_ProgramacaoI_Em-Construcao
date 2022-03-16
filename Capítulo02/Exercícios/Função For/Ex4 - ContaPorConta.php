<?php

// Objetivo: imprimir todas as contas feitas no exercício 4

 $soma = 0;
 $k = 0;

 for ($i=1; $i<=10; $i++)
  {
    $k = $k + $i;
    $j = $k - $i;
    $soma = $soma + ($i*2);
    echo $j . "+" . $k . "=" . $soma . "<br>";
  }

?>

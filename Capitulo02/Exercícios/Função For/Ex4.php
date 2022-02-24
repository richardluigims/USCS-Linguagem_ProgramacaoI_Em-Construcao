<?php

// Objetivo: somar 10 primeiros números inteiros pares, iniciando com o número 2

 $soma = 0;

 for ($i=1; $i<=10; $i++)
  {
    $soma = $soma + ($i*2);
  }

  echo "O resultado da soma dos 10 primeiros números inteiros pares é $soma.";

?>

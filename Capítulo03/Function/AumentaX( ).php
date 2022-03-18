<?php

  $x = 6;
  //$x = $x + 10;
  AumentaX (10);
  //$x = $x + 20;
  AumentaX (20);
  //$x = $x + 30;
  AumentaX (30);
  //$x = $x + 40;
  AumentaX (40);
  echo $x;

  function AumentaX ($val) //possibilita a alteração do valor da variável
  {
    global $x;
    $x = $x + $val;
  }

?>

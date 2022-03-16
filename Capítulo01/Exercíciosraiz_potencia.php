<?php

//Objetivo: praticar o uso das funções sqrt e pow

  $x1 = 2.0;
  $y1 = 2.0;
  $x2 = 5.0;
  $y2 = 5.0;
  $d = sqrt((pow($x2-$x1, 2)) + (pow($y2-$y1, 2)));
  $x = pow($x2-$x1, 2) + pow($y2-$y1, 2);

  echo "O resultado é " . number_format($d, 2);
  echo "<br>O resultado é " . number_format(sqrt($x), 2);//também podemos escrever assim

?>

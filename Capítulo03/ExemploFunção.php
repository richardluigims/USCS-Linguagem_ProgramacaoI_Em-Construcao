<?php

    function delta ($a,$b,$c)
    {
      $delta = ($b*$b) - (4*$a*$c);
      echo $delta;
    }

    $v1 = 1;
    $v2 = -5;
    $v3 = 6;
    delta ($v1,$v2,$v3);

 ?>

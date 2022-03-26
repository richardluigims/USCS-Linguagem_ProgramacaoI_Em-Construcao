<?php

    Soma (3,2);
    echo "<br>";
    $v = Multiplica (3,3);
    echo $v;

    function Soma ($a, $b)
    {
      echo $a + $b;
    }

    function Multiplica ($x, $y)
    {
       return $x * $y; //return = voltar o resultado pra uma variável que esteja igualada à função. Ex: $v = Multiplica (3,3)
    }

?>

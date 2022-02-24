<?php

// imprimir números pares usando Do While e If

  $i = 1;
  do
  {
    if (($i % 2)==0)
    {
      echo "i = ";
      echo $i;
      echo "<br>";
    }
    $i++;
  } while ($i <= 20);

?>

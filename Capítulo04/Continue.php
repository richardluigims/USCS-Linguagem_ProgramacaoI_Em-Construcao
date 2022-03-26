<?php

  for ($i=1; $i<10; $i++)
  {
    if (($i % 2) == 1)
    {
      continue; // interrompe o valor que cumpre as condições estabelecidas
    }
    echo "i = " . $i; // imprime os valores pares
    echo "<br>";
  }
  
?>

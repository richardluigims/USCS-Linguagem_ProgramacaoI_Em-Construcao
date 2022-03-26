<?php

  for ($i=1; $i<10; $i++)
  {
    if (($i % 2) == 1)
    {
      continue; // interrompe apenas o valor que cumpre as condições estabelecidas e continua com o for
    }
    echo "i = " . $i; // imprime os valores pares
    echo "<br>";
  }
  
?>

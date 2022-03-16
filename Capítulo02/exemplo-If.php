<?php

// Objetivo: exemplo de If

  $a = 34;
  $b = 34;

  if ($a == $b)
  {
    echo "\$a = \$b"; //"\$b", para que apareça $b ao invés do valor atribuído à variável
    echo "<br>" . $a . "<br>";
    echo $b;
  }
  else
  {
    // se a condição for falsa
    echo "\$a != \$b";
    echo "<br>" . $a . "<br>";
    echo $b;
  }
  
 ?>

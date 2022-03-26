<?php

  $a = 1;

  echo "a = $a" . "<br>";

  $b = ($a > 0)? $a + 1 : $a - 1; // "?" = if e ":" = else

  echo "b = $b" . "<br>";

  echo "a = $a" . "<br>";

  if ($a > 0)
  {
    $b = $a + 1;
    echo "$a e $b" . "<br>";
  }
  else
  {
    $b = $a - 1;
    echo "$a e $b";
  }

?>

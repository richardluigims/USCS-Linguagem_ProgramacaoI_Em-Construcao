<?php

   $a = 10; // Escopo global
   $b = 11; // Escopo global
   $total = 12; // Escopo global

   F1();
   printf ('$total = %d', $total);
   function  F1() {
     global $a, $b, $total; // global = procurar fora da função
     $x = 5; // variavel local
     $total = $a + $b + $x;
   }

 ?>

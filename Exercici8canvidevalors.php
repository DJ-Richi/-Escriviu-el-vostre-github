<?php
// Variables inicials
$a = 5;
$b = 10;

echo "Abans de l'intercanvi: a = $a, b = $b<br>";

// Intercanvi de valors utilitzant una variable temporal
$temp = $a;
$a = $b;
$b = $temp;

echo "Després de l'intercanvi: a = $a, b = $b";
?>
